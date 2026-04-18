
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
    
    const block = registerBlockType( 'tenda21/experience-card', {
        apiVersion: 2,
        title: 'Experience Card',
        description: 'Archive card for a single Experience. Shows featured image, category label, title, and short description. Used inside the experiences-grid loop.',
        icon: 'block-default',
        category: 'tenda21_experience',
        keywords: [],
        supports: {},
        attributes: {
            experience_permalink: {
                type: ['object', 'null'],
                default: {post_id: 0, url: '#', title: '', 'post_type': null},
            },
            experience_featured: {
                type: ['object', 'null'],
                default: {id: 0, url: '', size: '', svg: '', alt: null},
            },
            experience_category_label: {
                type: ['string', 'null'],
                default: `Category`,
            },
            title: {
                type: ['string', 'null'],
                default: `Experience Title`,
            },
            experience_short_description: {
                type: ['string', 'null'],
                default: `Short description of this experience.`,
            }
        },
        example: { attributes: { experience_permalink: {post_id: 0, url: '#', title: '', 'post_type': null}, experience_featured: {id: 0, url: '', size: '', svg: '', alt: null}, experience_category_label: `Category`, title: `Experience Title`, experience_short_description: `Short description of this experience.` } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ href: propOrDefault( props.attributes.experience_permalink.url, 'experience_permalink', 'url' ), className: 'group flex flex-col bg-bone-100/85 overflow-hidden shadow-[0_1px_0_rgba(42,41,38,0.04),0_1px_2px_rgba(42,41,38,0.06)] transition-all duration-500 hover:-translate-y-[2px] hover:shadow-[0_12px_32px_rgba(42,41,38,0.10)]', onClick: function(e) { e.preventDefault(); } });
            const setAttributes = props.setAttributes; 
            
            props.experience_featured = useSelect(function( select ) {
                return {
                    experience_featured: props.attributes.experience_featured.id ? select('core').getMedia(props.attributes.experience_featured.id) : undefined
                };
            }, [props.attributes.experience_featured] ).experience_featured;
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('a', { ...blockProps }, [' ', el('div', { className: 'aspect-[4/3] bg-mist-200 bg-cover bg-center', style: { ...((propOrDefault( props.attributes.experience_featured.url, 'experience_featured', 'url' ) ? ('url(' + propOrDefault( props.attributes.experience_featured.url, 'experience_featured', 'url' ) + ')') : null !== null && propOrDefault( props.attributes.experience_featured.url, 'experience_featured', 'url' ) ? ('url(' + propOrDefault( props.attributes.experience_featured.url, 'experience_featured', 'url' ) + ')') : null !== '') ? {backgroundImage: propOrDefault( props.attributes.experience_featured.url, 'experience_featured', 'url' ) ? ('url(' + propOrDefault( props.attributes.experience_featured.url, 'experience_featured', 'url' ) + ')') : null} : {}) } }), ' ', el('div', { className: 'p-6 space-y-2' }, [' ', el(RichText, { tagName: 'p', className: 'font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700', value: propOrDefault( props.attributes.experience_category_label, 'experience_category_label' ), onChange: function(val) { setAttributes( {experience_category_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'h2', className: 'font-serif font-light text-[1.6rem] leading-[1.25] tracking-[0.01em] text-charcoal-900 mb-3', value: propOrDefault( props.attributes.title, 'title' ), onChange: function(val) { setAttributes( {title: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans text-sm leading-relaxed text-charcoal-600', value: propOrDefault( props.attributes.experience_short_description, 'experience_short_description' ), onChange: function(val) { setAttributes( {experience_short_description: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                        pgGetFeature4("pgMediaImageControl")('experience_featured', setAttributes, props, 'full', true, 'Featured Image', '' ),
                                        
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    pgGetFeature4("pgUrlControl")('experience_permalink', setAttributes, props, 'Experience Link', '', null ),
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

    } );
} )(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor
);                        
