
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
            const blockProps = useBlockProps({ className: 'flex flex-col gap-5 rounded-sm border border-mist-300 bg-bone-50/80 p-6' });
            const setAttributes = props.setAttributes; 
            
            
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('div', { ...blockProps }, [' ', el('div', { className: 'space-y-2' }, [' ', el(RichText, { tagName: 'span', className: 'font-sans uppercase text-[0.6rem] tracking-[0.3em] font-medium text-charcoal-500', value: propOrDefault( props.attributes.starts_label, 'starts_label' ), onChange: function(val) { setAttributes( {starts_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('p', { className: 'font-serif text-4xl leading-tight text-charcoal-900' }, '12 April 2024'), ' ', el('p', { className: 'font-sans text-sm uppercase tracking-[0.3em] text-charcoal-600' }, '09:00'), ' ']), ' ', el('div', { className: 'h-px w-full bg-mist-300' }), ' ', el('div', { className: 'space-y-2' }, [' ', el(RichText, { tagName: 'span', className: 'font-sans uppercase text-[0.6rem] tracking-[0.3em] font-medium text-charcoal-500', value: propOrDefault( props.attributes.ends_label, 'ends_label' ), onChange: function(val) { setAttributes( {ends_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('p', { className: 'font-serif text-2xl leading-tight text-charcoal-800' }, '14 April 2024'), ' ', el('p', { className: 'font-sans text-sm uppercase tracking-[0.3em] text-charcoal-600' }, '14:00'), ' ']), ' ', el(RichText, { tagName: 'p', className: 'font-sans text-[0.6rem] uppercase tracking-[0.3em] text-charcoal-500', value: propOrDefault( props.attributes.timezone_label, 'timezone_label' ), onChange: function(val) { setAttributes( {timezone_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.starts_label,
                                        help: __( '' ),
                                        label: __( 'Starts Label' ),
                                        onChange: function(val) { setAttributes({starts_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.ends_label,
                                        help: __( '' ),
                                        label: __( 'Ends Label' ),
                                        onChange: function(val) { setAttributes({ends_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.timezone_label,
                                        help: __( '' ),
                                        label: __( 'Timezone Label' ),
                                        onChange: function(val) { setAttributes({timezone_label: val}) },
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

    block = registerBlockType( 'tenda21/event-date-meta', blockSettings );
} )(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor
);                        
