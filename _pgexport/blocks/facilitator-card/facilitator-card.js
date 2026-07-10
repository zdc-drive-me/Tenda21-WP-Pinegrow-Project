
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
            const blockProps = useBlockProps({ className: 'group' });
            const setAttributes = props.setAttributes; 
            
            props.facilitator_featured = useSelect(function( select ) {
                return {
                    facilitator_featured: props.attributes.facilitator_featured.id ? select('core').getMedia(props.attributes.facilitator_featured.id) : undefined
                };
            }, [props.attributes.facilitator_featured] ).facilitator_featured;
            
            
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('article', { ...blockProps }, [' ', el('a', { href: propOrDefault( props.attributes.facilitator_permalink.url, 'facilitator_permalink', 'url' ), className: 'block', onClick: function(e) { e.preventDefault(); } }, [' ', el('div', { className: 'aspect-[3/4] bg-mist-300 bg-cover bg-center mb-6 transition-all duration-500 group-hover:shadow-[0_20px_60px_rgba(42,41,38,0.12)]', style: { ...((propOrDefault( props.attributes.facilitator_featured.url, 'facilitator_featured', 'url' ) ? ('url(' + propOrDefault( props.attributes.facilitator_featured.url, 'facilitator_featured', 'url' ) + ')') : null !== null && propOrDefault( props.attributes.facilitator_featured.url, 'facilitator_featured', 'url' ) ? ('url(' + propOrDefault( props.attributes.facilitator_featured.url, 'facilitator_featured', 'url' ) + ')') : null !== '') ? {backgroundImage: propOrDefault( props.attributes.facilitator_featured.url, 'facilitator_featured', 'url' ) ? ('url(' + propOrDefault( props.attributes.facilitator_featured.url, 'facilitator_featured', 'url' ) + ')') : null} : {}) } }), ' ', el('div', { className: 'space-y-2' }, [' ', el(RichText, { tagName: 'h3', className: 'font-serif font-light text-2xl md:text-3xl leading-[1.3] text-charcoal-900 group-hover:text-forest-800 transition-colors', value: propOrDefault( props.attributes.title, 'title' ), onChange: function(val) { setAttributes( {title: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700', value: propOrDefault( props.attributes.facilitator_role_label, 'facilitator_role_label' ), onChange: function(val) { setAttributes( {facilitator_role_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-base leading-[1.8] text-charcoal-700', value: propOrDefault( props.attributes.facilitator_short_bio, 'facilitator_short_bio' ), onChange: function(val) { setAttributes( {facilitator_short_bio: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                        pgGetFeature5("pgMediaImageControl")('facilitator_featured', setAttributes, props, 'full', true, 'Featured Photo', '', function(url) { return propOrDefault(url, 'facilitator_featured', 'url'); } ),
                                        
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    pgGetFeature5("pgUrlControl")('facilitator_permalink', setAttributes, props, 'Facilitator Link', '', null ),
                                    el(TextControl, {
                                        value: props.attributes.title,
                                        help: __( '' ),
                                        label: __( 'Name' ),
                                        onChange: function(val) { setAttributes({title: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.facilitator_role_label,
                                        help: __( '' ),
                                        label: __( 'Role Label' ),
                                        onChange: function(val) { setAttributes({facilitator_role_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.facilitator_short_bio,
                                        help: __( '' ),
                                        label: __( 'Short Bio' ),
                                        onChange: function(val) { setAttributes({facilitator_short_bio: val}) },
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

    block = registerBlockType( 'tenda21/facilitator-card', blockSettings );
} )(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor
);                        
