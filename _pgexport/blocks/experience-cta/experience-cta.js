
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
            const blockProps = useBlockProps({ className: 'py-24 px-6 bg-bone-100' });
            const setAttributes = props.setAttributes; 
            
            
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-3xl mx-auto text-center w-full space-y-8' }, [' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-base leading-[1.8] text-charcoal-600 max-w-[60ch] mx-auto', value: propOrDefault( props.attributes.experience_booking_note, 'experience_booking_note' ), onChange: function(val) { setAttributes( {experience_booking_note: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'a', href: propOrDefault( props.attributes.experience_cta_url.url, 'experience_cta_url', 'url' ), className: 'inline-block bg-clay-500 text-bone-50 font-sans font-medium text-sm uppercase tracking-[0.12em] px-12 py-5 transition-all duration-300 hover:bg-clay-600 hover:[transform:translateY(-2px)] hover:shadow-[0_8px_24px_rgba(0,0,0,0.12)]', onClick: function(e) { e.preventDefault(); }, value: propOrDefault( props.attributes.experience_cta_label, 'experience_cta_label' ), onChange: function(val) { setAttributes( {experience_cta_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.experience_booking_note,
                                        help: __( '' ),
                                        label: __( 'Booking Note' ),
                                        onChange: function(val) { setAttributes({experience_booking_note: val}) },
                                        type: 'text'
                                    }),
                                    pgGetFeature5("pgUrlControl")('experience_cta_url', setAttributes, props, 'CTA URL', '', null ),
                                    el(TextControl, {
                                        value: props.attributes.experience_cta_label,
                                        help: __( '' ),
                                        label: __( 'CTA Label' ),
                                        onChange: function(val) { setAttributes({experience_cta_label: val}) },
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

    block = registerBlockType( 'tenda21/experience-cta', blockSettings );
} )(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor
);                        
