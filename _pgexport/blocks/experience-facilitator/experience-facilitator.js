
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
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-5xl mx-auto w-full' }, [' ', el(RichText, { tagName: 'h2', className: 'font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-charcoal-600 mb-12', value: propOrDefault( props.attributes.heading_label, 'heading_label' ), onChange: function(val) { setAttributes( {heading_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('div', { className: 'grid md:grid-cols-4 gap-8 items-start' }, [' ', el('div', { className: 'md:col-span-1' }, [' ', el('div', { className: 'aspect-[3/4] bg-mist-300 bg-cover bg-center mb-4' }), ' ']), ' ', el('div', { className: 'md:col-span-3 space-y-4' }, [' ', el('div', {}, [' ', el('h3', { className: 'font-serif font-light text-2xl md:text-3xl leading-[1.3] text-charcoal-900 mb-2' }, 'Facilitator Name'), ' ', el('p', { className: 'font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700' }, 'Role / Practice'), ' ']), ' ', el('p', { className: 'font-sans font-light text-lg leading-[1.8] text-charcoal-700' }, 'Short bio excerpt for the facilitator.'), ' ', el(RichText, { tagName: 'a', href: 'facilitators.html', className: 'inline-block font-sans text-sm text-forest-700 hover:text-forest-800 uppercase tracking-[0.1em] transition-colors', value: propOrDefault( props.attributes.link_label, 'link_label' ), onChange: function(val) { setAttributes( {link_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.heading_label,
                                        help: __( '' ),
                                        label: __( 'Section Heading' ),
                                        onChange: function(val) { setAttributes({heading_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.link_label,
                                        help: __( '' ),
                                        label: __( 'Link Label' ),
                                        onChange: function(val) { setAttributes({link_label: val}) },
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

    block = registerBlockType( 'tenda21/experience-facilitator', blockSettings );
} )(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor
);                        
