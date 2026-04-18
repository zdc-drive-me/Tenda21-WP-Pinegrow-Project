
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
    
    const block = registerBlockType( 'tenda21/space-gallery', {
        apiVersion: 2,
        title: 'Space Gallery',
        description: 'Gallery showcasing the space with a heading and three images',
        icon: 'block-default',
        category: 'tenda21_blocks',
        keywords: [],
        supports: {},
        attributes: {
            section_title: {
                type: ['string', 'null'],
                default: `The Space`,
            },
            image_1: {
                type: ['object', 'null'],
                default: {id: 0, url: '', size: '', svg: '', alt: null},
            },
            image_2: {
                type: ['object', 'null'],
                default: {id: 0, url: '', size: '', svg: '', alt: null},
            },
            image_wide: {
                type: ['object', 'null'],
                default: {id: 0, url: '', size: '', svg: '', alt: null},
            }
        },
        example: { attributes: { section_title: `The Space`, image_1: {id: 0, url: '', size: '', svg: '', alt: null}, image_2: {id: 0, url: '', size: '', svg: '', alt: null}, image_wide: {id: 0, url: '', size: '', svg: '', alt: null} } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'py-32 px-6 bg-bone-200', 'data-block-name': 'space-gallery' });
            const setAttributes = props.setAttributes; 
            
            props.image_1 = useSelect(function( select ) {
                return {
                    image_1: props.attributes.image_1.id ? select('core').getMedia(props.attributes.image_1.id) : undefined
                };
            }, [props.attributes.image_1] ).image_1;
            

            props.image_2 = useSelect(function( select ) {
                return {
                    image_2: props.attributes.image_2.id ? select('core').getMedia(props.attributes.image_2.id) : undefined
                };
            }, [props.attributes.image_2] ).image_2;
            

            props.image_wide = useSelect(function( select ) {
                return {
                    image_wide: props.attributes.image_wide.id ? select('core').getMedia(props.attributes.image_wide.id) : undefined
                };
            }, [props.attributes.image_wide] ).image_wide;
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-7xl mx-auto w-full' }, [' ', el(RichText, { tagName: 'h2', className: 'font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-charcoal-600 text-center mb-20', value: propOrDefault( props.attributes.section_title, 'section_title' ), onChange: function(val) { setAttributes( {section_title: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('div', { className: 'grid md:grid-cols-2 gap-8' }, [' ', el('div', { className: 'aspect-[4/5] bg-mist-300 bg-[url(\'https://images.unsplash.com/photo-1640348307767-b8e8bc765ff5?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDE4fHxpbnRlcmlvciUyMGxpbmVufGVufDB8fHx8MTc3MzA2NTg0MXww&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=1200&h=800&fit=crop\')] bg-cover bg-center opacity-0 [animation:fadeInScale_1s_ease-out_forwards] [animation-timeline:view()] [animation-range:entry_0%_entry_40%]', style: { ...((propOrDefault( props.attributes.image_1.url, 'image_1', 'url' ) ? ('url(' + propOrDefault( props.attributes.image_1.url, 'image_1', 'url' ) + ')') : null !== null && propOrDefault( props.attributes.image_1.url, 'image_1', 'url' ) ? ('url(' + propOrDefault( props.attributes.image_1.url, 'image_1', 'url' ) + ')') : null !== '') ? {backgroundImage: propOrDefault( props.attributes.image_1.url, 'image_1', 'url' ) ? ('url(' + propOrDefault( props.attributes.image_1.url, 'image_1', 'url' ) + ')') : null} : {}) } }), ' ', el('div', { className: 'aspect-[4/5] bg-mist-300 bg-[url(\'https://images.unsplash.com/photo-1520682464353-63a64fa8bf98?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDE4fHxmb3Jlc3QlMjBwYXRofGVufDB8fHx8MTc3MzA2NTg0Mnww&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=1200&h=800&fit=crop\')] bg-cover bg-center opacity-0 [animation:fadeInScale_1s_ease-out_forwards] [animation-timeline:view()] [animation-range:entry_0%_entry_40%]', style: { ...((propOrDefault( props.attributes.image_2.url, 'image_2', 'url' ) ? ('url(' + propOrDefault( props.attributes.image_2.url, 'image_2', 'url' ) + ')') : null !== null && propOrDefault( props.attributes.image_2.url, 'image_2', 'url' ) ? ('url(' + propOrDefault( props.attributes.image_2.url, 'image_2', 'url' ) + ')') : null !== '') ? {backgroundImage: propOrDefault( props.attributes.image_2.url, 'image_2', 'url' ) ? ('url(' + propOrDefault( props.attributes.image_2.url, 'image_2', 'url' ) + ')') : null} : {}) } }), ' ', el('div', { className: 'md:col-span-2 aspect-[16/9] bg-mist-300 bg-[url(\'https://images.unsplash.com/photo-1602395714441-e4a5686cbb59?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDE0fHxhcmNoaXRlY3R1cmUlMjB3b29kfGVufDB8fHx8MTc3MzA2NTg0Mnww&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=1200&h=800&fit=crop\')] bg-cover bg-center opacity-0 [animation:fadeInScale_1s_ease-out_forwards] [animation-timeline:view()] [animation-range:entry_0%_entry_40%]', style: { ...((propOrDefault( props.attributes.image_wide.url, 'image_wide', 'url' ) ? ('url(' + propOrDefault( props.attributes.image_wide.url, 'image_wide', 'url' ) + ')') : null !== null && propOrDefault( props.attributes.image_wide.url, 'image_wide', 'url' ) ? ('url(' + propOrDefault( props.attributes.image_wide.url, 'image_wide', 'url' ) + ')') : null !== '') ? {backgroundImage: propOrDefault( props.attributes.image_wide.url, 'image_wide', 'url' ) ? ('url(' + propOrDefault( props.attributes.image_wide.url, 'image_wide', 'url' ) + ')') : null} : {}) } }), ' ']), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                        pgGetFeature4("pgMediaImageControl")('image_1', setAttributes, props, 'full', true, 'Image 1', '' ),
                                        
                        pgGetFeature4("pgMediaImageControl")('image_2', setAttributes, props, 'full', true, 'Image 2', '' ),
                                        
                        pgGetFeature4("pgMediaImageControl")('image_wide', setAttributes, props, 'full', true, 'Wide Image', '' ),
                                        
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.section_title,
                                        help: __( '' ),
                                        label: __( 'Section Title' ),
                                        onChange: function(val) { setAttributes({section_title: val}) },
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
