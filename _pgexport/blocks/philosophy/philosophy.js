
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
    
    const block = registerBlockType( 'tenda21/philosophy', {
        apiVersion: 2,
        title: 'Philosophy',
        description: 'Philosophy section with a quote and descriptive paragraphs',
        icon: 'block-default',
        category: 'tenda21_blocks',
        keywords: [],
        supports: {},
        attributes: {
            quote: {
                type: ['string', 'null'],
                default: `In the quiet,<br>we remember who we are.`,
            },
            paragraph_1: {
                type: ['string', 'null'],
                default: `Tenda 21 is not an escape. It is a return—to presence, to the body, to the earth beneath our feet. Here, time moves differently. Days unfold without the relentless pulse of notifications, the weight of screens, the noise that drowns out our own thoughts.`,
            },
            paragraph_2: {
                type: ['string', 'null'],
                default: `We offer space. Not empty space, but space filled with birdsong, the smell of rain on stone, the texture of linen, the warmth of shared silence. Space to breathe fully. Space to listen. Space to simply be.`,
            },
            paragraph_3: {
                type: ['string', 'null'],
                default: `This is where you practice the art of living deliberately—where every moment is an invitation to arrive, again and again, in the only place we ever truly are: here, now.`,
            }
        },
        example: { attributes: { quote: `In the quiet,<br>we remember who we are.`, paragraph_1: `Tenda 21 is not an escape. It is a return—to presence, to the body, to the earth beneath our feet. Here, time moves differently. Days unfold without the relentless pulse of notifications, the weight of screens, the noise that drowns out our own thoughts.`, paragraph_2: `We offer space. Not empty space, but space filled with birdsong, the smell of rain on stone, the texture of linen, the warmth of shared silence. Space to breathe fully. Space to listen. Space to simply be.`, paragraph_3: `This is where you practice the art of living deliberately—where every moment is an invitation to arrive, again and again, in the only place we ever truly are: here, now.` } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'py-32 md:py-48 px-6 bg-bone-200', 'data-block-name': 'philosophy-section' });
            const setAttributes = props.setAttributes; 
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-4xl mx-auto space-y-16 w-full' }, [' ', el(RichText, { tagName: 'p', className: 'font-serif font-light text-[clamp(1.75rem,4vw,3rem)] leading-[1.4] text-charcoal-800 text-center', value: propOrDefault( props.attributes.quote, 'quote' ), onChange: function(val) { setAttributes( {quote: val }) } }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-lg md:text-xl leading-[1.8] text-charcoal-700 max-w-[65ch] mx-auto', value: propOrDefault( props.attributes.paragraph_1, 'paragraph_1' ), onChange: function(val) { setAttributes( {paragraph_1: val }) } }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-lg md:text-xl leading-[1.8] text-charcoal-700 max-w-[65ch] mx-auto', value: propOrDefault( props.attributes.paragraph_2, 'paragraph_2' ), onChange: function(val) { setAttributes( {paragraph_2: val }) } }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-lg md:text-xl leading-[1.8] text-charcoal-700 max-w-[65ch] mx-auto', value: propOrDefault( props.attributes.paragraph_3, 'paragraph_3' ), onChange: function(val) { setAttributes( {paragraph_3: val }) } }), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(BaseControl, {
                                        help: __( '' ),
                                        label: __( 'Quote' ),
                                    }, [
                                        el(RichText, {
                                            value: props.attributes.quote,
                                            style: {
                                                    border: '1px solid black',
                                                    padding: '6px 8px',
                                                    minHeight: '80px',
                                                    border: '1px solid rgb(117, 117, 117)',
                                                    fontSize: '13px',
                                                    lineHeight: 'normal'
                                                },
                                            onChange: function(val) { setAttributes({quote: val}) },
                                        })
                                    ]),
                                    el(BaseControl, {
                                        help: __( '' ),
                                        label: __( 'Paragraph 1' ),
                                    }, [
                                        el(RichText, {
                                            value: props.attributes.paragraph_1,
                                            style: {
                                                    border: '1px solid black',
                                                    padding: '6px 8px',
                                                    minHeight: '80px',
                                                    border: '1px solid rgb(117, 117, 117)',
                                                    fontSize: '13px',
                                                    lineHeight: 'normal'
                                                },
                                            onChange: function(val) { setAttributes({paragraph_1: val}) },
                                        })
                                    ]),
                                    el(BaseControl, {
                                        help: __( '' ),
                                        label: __( 'Paragraph 2' ),
                                    }, [
                                        el(RichText, {
                                            value: props.attributes.paragraph_2,
                                            style: {
                                                    border: '1px solid black',
                                                    padding: '6px 8px',
                                                    minHeight: '80px',
                                                    border: '1px solid rgb(117, 117, 117)',
                                                    fontSize: '13px',
                                                    lineHeight: 'normal'
                                                },
                                            onChange: function(val) { setAttributes({paragraph_2: val}) },
                                        })
                                    ]),
                                    el(BaseControl, {
                                        help: __( '' ),
                                        label: __( 'Paragraph 3' ),
                                    }, [
                                        el(RichText, {
                                            value: props.attributes.paragraph_3,
                                            style: {
                                                    border: '1px solid black',
                                                    padding: '6px 8px',
                                                    minHeight: '80px',
                                                    border: '1px solid rgb(117, 117, 117)',
                                                    fontSize: '13px',
                                                    lineHeight: 'normal'
                                                },
                                            onChange: function(val) { setAttributes({paragraph_3: val}) },
                                        })
                                    ]),    
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
