
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
            const blockProps = useBlockProps({ className: 'py-24 px-6 bg-bone-200 border-b border-mist-400' });
            const setAttributes = props.setAttributes; 
            
            props.experience_featured = useSelect(function( select ) {
                return {
                    experience_featured: props.attributes.experience_featured.id ? select('core').getMedia(props.attributes.experience_featured.id) : undefined
                };
            }, [props.attributes.experience_featured] ).experience_featured;
            
            
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-7xl mx-auto w-full' }, [' ', el('div', { className: 'grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10' }, [' ', ' ', el('a', { href: propOrDefault( props.attributes.experience_permalink.url, 'experience_permalink', 'url' ), className: 'group flex flex-col bg-bone-100/85 overflow-hidden shadow-[0_1px_0_rgba(42,41,38,0.04),0_1px_2px_rgba(42,41,38,0.06)] transition-all duration-500 hover:-translate-y-[2px] hover:shadow-[0_12px_32px_rgba(42,41,38,0.10)]', onClick: function(e) { e.preventDefault(); } }, [' ', el('div', { className: 'aspect-[4/3] bg-mist-200 bg-cover bg-center', style: { ...((propOrDefault( props.attributes.experience_featured.url, 'experience_featured', 'url' ) ? ('url(' + propOrDefault( props.attributes.experience_featured.url, 'experience_featured', 'url' ) + ')') : null !== null && propOrDefault( props.attributes.experience_featured.url, 'experience_featured', 'url' ) ? ('url(' + propOrDefault( props.attributes.experience_featured.url, 'experience_featured', 'url' ) + ')') : null !== '') ? {backgroundImage: propOrDefault( props.attributes.experience_featured.url, 'experience_featured', 'url' ) ? ('url(' + propOrDefault( props.attributes.experience_featured.url, 'experience_featured', 'url' ) + ')') : null} : {}) } }), ' ', el('div', { className: 'p-6 space-y-2' }, [' ', el(RichText, { tagName: 'p', className: 'font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700', value: propOrDefault( props.attributes.experience_category_label, 'experience_category_label' ), onChange: function(val) { setAttributes( {experience_category_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'h2', className: 'font-serif font-light text-[1.6rem] leading-[1.25] tracking-[0.01em] text-charcoal-900 mb-3', value: propOrDefault( props.attributes.title, 'title' ), onChange: function(val) { setAttributes( {title: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans text-sm leading-relaxed text-charcoal-600', value: propOrDefault( props.attributes.experience_short_description, 'experience_short_description' ), onChange: function(val) { setAttributes( {experience_short_description: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']), ' ']), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                        pgGetFeature5("pgMediaImageControl")('experience_featured', setAttributes, props, 'full', true, 'Featured Image', '', function(url) { return propOrDefault(url, 'experience_featured', 'url'); } ),
                                        
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    pgGetFeature5("pgUrlControl")('experience_permalink', setAttributes, props, 'Experience Link', '', null ),
                                    el(TextControl, {
                                        value: props.attributes.experience_category_label,
                                        help: __( '' ),
                                        label: __( 'Category Label' ),
                                        onChange: function(val) { setAttributes({experience_category_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.title,
                                        help: __( '' ),
                                        label: __( 'Experience Title' ),
                                        onChange: function(val) { setAttributes({title: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.experience_short_description,
                                        help: __( '' ),
                                        label: __( 'Short Description' ),
                                        onChange: function(val) { setAttributes({experience_short_description: val}) },
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

    block = registerBlockType( 'tenda21/experiences-grid', blockSettings );
} )(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor
);                        
