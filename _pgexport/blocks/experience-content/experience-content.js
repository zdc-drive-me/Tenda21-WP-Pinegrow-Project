
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
            const blockProps = useBlockProps({ className: 'py-24 px-6 bg-mist-100' });
            const setAttributes = props.setAttributes; 
            
            
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-4xl mx-auto w-full space-y-16' }, [' ', ' ', el('div', { className: 'space-y-8' }, [' ', el(RichText, { tagName: 'h2', className: 'font-serif font-light text-3xl md:text-4xl leading-[1.3] text-charcoal-900', value: propOrDefault( props.attributes.expectations_label, 'expectations_label' ), onChange: function(val) { setAttributes( {expectations_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('div', { className: 'space-y-6' }, [' ', el('p', { className: 'font-sans font-light text-lg leading-[1.8] text-charcoal-700' }, 'Describe what participants can expect during the experience.'), ' ']), ' ']), ' ', ' ', el('div', { className: 'border-t border-mist-400 pt-12 space-y-8' }, [' ', el(RichText, { tagName: 'h2', className: 'font-serif font-light text-3xl md:text-4xl leading-[1.3] text-charcoal-900', value: propOrDefault( props.attributes.benefits_label, 'benefits_label' ), onChange: function(val) { setAttributes( {benefits_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('div', { className: 'space-y-4' }, [' ', el('p', { className: 'font-sans font-light text-lg leading-[1.8] text-charcoal-700' }, 'List the key benefits participants will receive.'), ' ']), ' ']), ' ', ' ', el('div', { className: 'border-t border-mist-400 pt-12 space-y-8' }, [' ', el(RichText, { tagName: 'h2', className: 'font-serif font-light text-3xl md:text-4xl leading-[1.3] text-charcoal-900', value: propOrDefault( props.attributes.audience_label, 'audience_label' ), onChange: function(val) { setAttributes( {audience_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('div', { className: 'space-y-6' }, [' ', el('p', { className: 'font-sans font-light text-lg leading-[1.8] text-charcoal-700' }, 'Describe who the experience is suited for, including any contraindications.'), ' ']), ' ']), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.expectations_label,
                                        help: __( '' ),
                                        label: __( 'What to Expect Label' ),
                                        onChange: function(val) { setAttributes({expectations_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.benefits_label,
                                        help: __( '' ),
                                        label: __( 'Benefits Label' ),
                                        onChange: function(val) { setAttributes({benefits_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.audience_label,
                                        help: __( '' ),
                                        label: __( 'Audience Label' ),
                                        onChange: function(val) { setAttributes({audience_label: val}) },
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

    block = registerBlockType( 'tenda21/experience-content', blockSettings );
} )(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor
);                        
