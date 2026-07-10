
( function ( blocks, element, blockEditor ) {
    const el = element.createElement,
        registerBlockType = blocks.registerBlockType,
        ServerSideRender = pgGetFeature5("PgGetServerSideRender")(),
        InspectorControls = blockEditor.InspectorControls,
        useBlockProps = blockEditor.useBlockProps;
        
    const {__} = wp.i18n;
    const {ColorPicker, TextControl, ToggleControl, SelectControl, Panel, PanelBody, Disabled, TextareaControl, BaseControl} = wp.components;
    const {useSelect} = wp.data;
    const {RawHTML, Fragment} = element;
   
    const {InnerBlocks, URLInputButton, RichText} = wp.blockEditor;
    const useInnerBlocksProps = blockEditor.useInnerBlocksProps || blockEditor.__experimentalUseInnerBlocksProps;
    
    let block;
    const projectData = window.pg_project_data_tenda21 || {};

    const isMediaAttribute = function(prop) {
        const def = block.attributes && block.attributes[prop] && block.attributes[prop].default;
        return def && typeof def === 'object' && 'id' in def && 'url' in def && 'svg' in def && 'alt' in def;
    }

    const resolveMediaUrl = function(url) {
        if(typeof url === 'string' && url && url.charAt(0) !== '#' && !/^(?:[a-z][a-z0-9+.-]*:|\/\/)/i.test(url)) {
            const baseUrl = projectData.url || '';
            return baseUrl ? baseUrl.replace(/\/$/, '') + (url.charAt(0) === '/' ? url : '/' + url) : url;
        }
        return url;
    }

    const propOrDefault = function(val, prop, field) {
        let useDefaultValue = false;
        const defaultValue = block.attributes && block.attributes[prop] ? block.attributes[prop].default : undefined;
        if(defaultValue !== undefined && (val === null || val === '')) {
            useDefaultValue = true;
            val = field && defaultValue ? defaultValue[field] : defaultValue;
        }
        if(field && defaultValue && val === defaultValue[field]) {
            useDefaultValue = true;
        }
        if(useDefaultValue && field === 'url' && isMediaAttribute(prop)) {
            return resolveMediaUrl(val);
        }
        return val;
    }
    
    const blockSettings = {
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'flex flex-col gap-5 bg-charcoal-900 px-5 py-5 text-bone-50' });
            const setAttributes = props.setAttributes; 
            
            
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('div', { ...blockProps }, [' ', el('div', { className: 'flex items-end justify-between' }, [' ', el('div', { className: 'space-y-1' }, [' ', el(RichText, { tagName: 'span', className: 'font-sans uppercase text-[0.55rem] tracking-[0.25em] font-medium text-bone-200/60 block', value: propOrDefault( props.attributes.investment_label, 'investment_label' ), onChange: function(val) { setAttributes( {investment_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('span', { className: 'font-serif text-3xl leading-tight text-bone-50' }, '€420'), ' ']), ' ', el('span', { className: 'inline-flex items-center border border-bone-200/30 px-3 py-1 text-[0.58rem] font-sans uppercase tracking-[0.18em] text-bone-200' }, 'Few seats left'), ' ']), ' ', el(RichText, { tagName: 'p', className: 'font-sans text-xs leading-relaxed text-bone-200/55', value: propOrDefault( props.attributes.booking_note, 'booking_note' ), onChange: function(val) { setAttributes( {booking_note: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('a', { href: 'mailto:hello@tenda21.com', className: 'inline-flex items-center justify-center bg-bone-50 text-charcoal-900 font-sans font-medium text-xs uppercase tracking-[0.2em] px-8 py-3.5 transition-all duration-300 hover:bg-clay-400 hover:text-bone-50' }, [' ', el(RichText, { tagName: 'span', className: 'text-black hover:text-white', value: propOrDefault( props.attributes.booking_cta_label, 'booking_cta_label' ), onChange: function(val) { setAttributes( {booking_cta_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.investment_label,
                                        help: __( '' ),
                                        label: __( 'Investment Label' ),
                                        onChange: function(val) { setAttributes({investment_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.booking_note,
                                        help: __( '' ),
                                        label: __( 'Booking Note' ),
                                        onChange: function(val) { setAttributes({booking_note: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.booking_cta_label,
                                        help: __( '' ),
                                        label: __( 'Booking Button Label' ),
                                        onChange: function(val) { setAttributes({booking_cta_label: val}) },
                                        type: 'text'
                                    }),    
                                ])
                            )
                        ]
                    )                            

            ]);
        },

        save: function(props) {
            return null;
        }                        

    };

    block = registerBlockType( 'tenda21/event-booking-meta', blockSettings );
} )(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor
);                        
