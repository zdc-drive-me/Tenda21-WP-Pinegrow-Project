
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
    
    const block = registerBlockType( 'tenda21/hero-tenda21', {
        apiVersion: 2,
        title: 'Hero',
        description: 'Main hero section with background image',
        icon: 'block-default',
        category: 'tenda21_blocks',
        keywords: [],
        supports: {},
        attributes: {
            background_image: {
                type: ['object', 'null'],
                default: {id: 0, url: '', size: '', svg: '', alt: null},
            },
            title: {
                type: ['string', 'null'],
                default: `Tenda 21`,
            },
            subtitle: {
                type: ['string', 'null'],
                default: `Shelter for Presence`,
            }
        },
        example: { attributes: { background_image: {id: 0, url: '', size: '', svg: '', alt: null}, title: `Tenda 21`, subtitle: `Shelter for Presence` } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'bg-[url(/assets/images/sea-mist-1-optimized.webp)] bg-center bg-cover flex items-center justify-center min-h-screen overflow-hidden pt-24 relative', style: { ...((propOrDefault( props.attributes.background_image.url, 'background_image', 'url' ) ? ('url(' + propOrDefault( props.attributes.background_image.url, 'background_image', 'url' ) + ')') : null !== null && propOrDefault( props.attributes.background_image.url, 'background_image', 'url' ) ? ('url(' + propOrDefault( props.attributes.background_image.url, 'background_image', 'url' ) + ')') : null !== '') ? {backgroundImage: propOrDefault( props.attributes.background_image.url, 'background_image', 'url' ) ? ('url(' + propOrDefault( props.attributes.background_image.url, 'background_image', 'url' ) + ')') : null} : {}) } });
            const setAttributes = props.setAttributes; 
            
            props.background_image = useSelect(function( select ) {
                return {
                    background_image: props.attributes.background_image.id ? select('core').getMedia(props.attributes.background_image.id) : undefined
                };
            }, [props.attributes.background_image] ).background_image;
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'absolute inset-0 bg-bone-200/30 backdrop-blur-[1px]' }), ' ', el('div', { className: 'relative z-10 text-center px-6 py-20 max-w-5xl mx-auto w-full' }, [' ', el(RichText, { tagName: 'h1', className: 'font-light font-serif leading-[1.2] mb-8 text-[clamp(3rem,8vw,6rem)] text-charcoal-900 tracking-[0.02em] [animation:fadeInUp_1.2s_ease-out_0.3s_forwards]', value: propOrDefault( props.attributes.title, 'title' ), onChange: function(val) { setAttributes( {title: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-charcoal-700 mb-16 [animation:fadeInUp_1.2s_ease-out_0.6s_forwards]', value: propOrDefault( props.attributes.subtitle, 'subtitle' ), onChange: function(val) { setAttributes( {subtitle: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('div', { className: 'w-px h-16 bg-charcoal-400 mx-auto opacity-0 [animation:fadeIn_1s_ease-out_1.5s_forwards]' }), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                        pgGetFeature4("pgMediaImageControl")('background_image', setAttributes, props, 'full', true, 'Background image', '' ),
                                        
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.title,
                                        help: __( '' ),
                                        label: __( 'Title' ),
                                        onChange: function(val) { setAttributes({title: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.subtitle,
                                        help: __( '' ),
                                        label: __( 'Subtitle' ),
                                        onChange: function(val) { setAttributes({subtitle: val}) },
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
