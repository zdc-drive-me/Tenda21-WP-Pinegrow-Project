
( function ( blocks, element, blockEditor ) {
    const el = element.createElement,
        registerBlockType = blocks.registerBlockType,
        ServerSideRender = pgGetFeature4("PgGetServerSideRender")(),
        InspectorControls = blockEditor.InspectorControls,
        useBlockProps = blockEditor.useBlockProps;
        
    const {__} = wp.i18n;
    const {ColorPicker, TextControl, ToggleControl, SelectControl, Panel, PanelBody, Disabled, TextareaControl, BaseControl} = wp.components;
    const {useSelect} = wp.data;
    const {RawHTML, Fragment} = element;
   
    const {InnerBlocks, URLInputButton, RichText} = wp.blockEditor;
    const useInnerBlocksProps = blockEditor.useInnerBlocksProps || blockEditor.__experimentalUseInnerBlocksProps;
    
    const propOrDefault = function(val, prop, field) {
        if(block.attributes[prop] && (val === null || val === '')) {
            return field ? block.attributes[prop].default[field] : block.attributes[prop].default;
        }
        return val;
    }
    
    const block = registerBlockType( 'tenda21/facilitators-grid', {
        apiVersion: 2,
        title: 'Facilitators Grid',
        description: 'Archive section wrapper for the Facilitators CPT. Owns the grid layout and loop. Loop item: facilitator-card.',
        icon: 'block-default',
        category: 'tenda21_facilitator',
        keywords: [],
        supports: {},
        attributes: {
            facilitator_permalink: {
                type: ['object', 'null'],
                default: {post_id: 0, url: '#', title: '', 'post_type': null},
            },
            facilitator_featured: {
                type: ['object', 'null'],
                default: {id: 0, url: '', size: '', svg: '', alt: null},
            },
            title: {
                type: ['string', 'null'],
                default: `Facilitator Name`,
            },
            facilitator_role_label: {
                type: ['string', 'null'],
                default: `Role / Practice`,
            },
            facilitator_short_bio: {
                type: ['string', 'null'],
                default: `Short facilitator bio.`,
            }
        },
        example: { attributes: { facilitator_permalink: {post_id: 0, url: '#', title: '', 'post_type': null}, facilitator_featured: {id: 0, url: '', size: '', svg: '', alt: null}, title: `Facilitator Name`, facilitator_role_label: `Role / Practice`, facilitator_short_bio: `Short facilitator bio.` } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'py-24 px-6 bg-bone-200' });
            const setAttributes = props.setAttributes; 
            
            props.facilitator_featured = useSelect(function( select ) {
                return {
                    facilitator_featured: props.attributes.facilitator_featured.id ? select('core').getMedia(props.attributes.facilitator_featured.id) : undefined
                };
            }, [props.attributes.facilitator_featured] ).facilitator_featured;
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-7xl mx-auto w-full' }, [' ', el('div', { className: 'grid md:grid-cols-2 lg:grid-cols-3 gap-12' }, [' ', ' ', el('article', { className: 'group' }, [' ', el('a', { href: propOrDefault( props.attributes.facilitator_permalink.url, 'facilitator_permalink', 'url' ), className: 'block', onClick: function(e) { e.preventDefault(); } }, [' ', el('div', { className: 'aspect-[3/4] bg-mist-300 bg-cover bg-center mb-6 transition-all duration-500 group-hover:shadow-[0_20px_60px_rgba(42,41,38,0.12)]', style: { ...((propOrDefault( props.attributes.facilitator_featured.url, 'facilitator_featured', 'url' ) ? ('url(' + propOrDefault( props.attributes.facilitator_featured.url, 'facilitator_featured', 'url' ) + ')') : null !== null && propOrDefault( props.attributes.facilitator_featured.url, 'facilitator_featured', 'url' ) ? ('url(' + propOrDefault( props.attributes.facilitator_featured.url, 'facilitator_featured', 'url' ) + ')') : null !== '') ? {backgroundImage: propOrDefault( props.attributes.facilitator_featured.url, 'facilitator_featured', 'url' ) ? ('url(' + propOrDefault( props.attributes.facilitator_featured.url, 'facilitator_featured', 'url' ) + ')') : null} : {}) } }), ' ', el('div', { className: 'space-y-2' }, [' ', el(RichText, { tagName: 'h3', className: 'font-serif font-light text-2xl md:text-3xl leading-[1.3] text-charcoal-900 group-hover:text-forest-800 transition-colors', value: propOrDefault( props.attributes.title, 'title' ), onChange: function(val) { setAttributes( {title: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700', value: propOrDefault( props.attributes.facilitator_role_label, 'facilitator_role_label' ), onChange: function(val) { setAttributes( {facilitator_role_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-base leading-[1.8] text-charcoal-700', value: propOrDefault( props.attributes.facilitator_short_bio, 'facilitator_short_bio' ), onChange: function(val) { setAttributes( {facilitator_short_bio: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']), ' ']), ' ']), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                        pgGetFeature4("pgMediaImageControl")('facilitator_featured', setAttributes, props, 'full', true, 'Featured Photo', '' ),
                                        
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    pgGetFeature4("pgUrlControl")('facilitator_permalink', setAttributes, props, 'Facilitator Link', '', null ),
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

    } );
} )(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor
);                        
