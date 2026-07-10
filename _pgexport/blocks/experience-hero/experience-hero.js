
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
            const blockProps = useBlockProps({ className: 'relative pt-32 pb-16 px-6 bg-bone-200' });
            const setAttributes = props.setAttributes; 
            
            
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-6xl mx-auto w-full' }, [' ', el('a', { href: 'experiences.html', className: 'inline-block font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700 hover:text-forest-800 mb-8 transition-colors' }, [' ', el(RichText, { tagName: 'span', value: propOrDefault( props.attributes.back_link_label, 'back_link_label' ), onChange: function(val) { setAttributes( {back_link_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', el('div', { className: 'grid md:grid-cols-2 gap-12 items-start' }, [' ', el('div', { className: 'space-y-6' }, [' ', el('div', { className: 'space-y-3' }, [' ', el('h1', { className: 'font-light text-[clamp(2.5rem,6vw,4.5rem)] leading-[1.2] tracking-[0.02em] text-charcoal-900' }, 'Experience Title'), ' ', el('p', { className: 'font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-forest-700' }, 'Category'), ' ']), ' ', el('p', { className: 'font-sans font-light text-xl leading-[1.8] text-charcoal-700' }, 'Intro text for the experience.'), ' ', el('div', { className: 'flex items-start gap-10 pt-2 border-t border-mist-400' }, [' ', el('div', { className: 'pt-6' }, [' ', el(RichText, { tagName: 'span', className: 'font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1', value: propOrDefault( props.attributes.duration_label, 'duration_label' ), onChange: function(val) { setAttributes( {duration_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('span', { className: 'font-sans text-sm text-charcoal-800' }, 'Flexible'), ' ']), ' ', el('div', { className: 'pt-6' }, [' ', el(RichText, { tagName: 'span', className: 'font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1', value: propOrDefault( props.attributes.format_label, 'format_label' ), onChange: function(val) { setAttributes( {format_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('span', { className: 'font-sans text-sm text-charcoal-800' }, 'Group & Private'), ' ']), ' ']), ' ']), ' ', el('div', { className: 'aspect-[4/5] bg-mist-300 bg-cover bg-center sticky top-32' }), ' ']), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.back_link_label,
                                        help: __( '' ),
                                        label: __( 'Back Link Label' ),
                                        onChange: function(val) { setAttributes({back_link_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.duration_label,
                                        help: __( '' ),
                                        label: __( 'Duration Label' ),
                                        onChange: function(val) { setAttributes({duration_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.format_label,
                                        help: __( '' ),
                                        label: __( 'Format Label' ),
                                        onChange: function(val) { setAttributes({format_label: val}) },
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

    block = registerBlockType( 'tenda21/experience-hero', blockSettings );
} )(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor
);                        
