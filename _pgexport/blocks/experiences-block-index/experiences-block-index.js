
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
    
    const block = registerBlockType( 'tenda21/experiences-block-index', {
        apiVersion: 2,
        title: 'Experiences Grid Home',
        description: 'Immersions section with three experience cards',
        icon: 'block-default',
        category: 'tenda21_blocks',
        keywords: [],
        supports: {},
        attributes: {
            section_title: {
                type: ['string', 'null'],
                default: `Immersions`,
            },
            card1_title: {
                type: ['string', 'null'],
                default: `Silent Immersion`,
            },
            card1_description: {
                type: ['string', 'null'],
                default: `Three days of noble silence. Guided meditation, mindful movement, and contemplative practices. Learn to hear the voice beneath the noise.`,
            },
            card1_duration: {
                type: ['string', 'null'],
                default: `3–5 Days`,
            },
            card2_title: {
                type: ['string', 'null'],
                default: `Nature Practice`,
            },
            card2_description: {
                type: ['string', 'null'],
                default: `Forest bathing, wild foraging, earth-based rituals. Restore your relationship with the living world. Remember that you are nature, not separate from it.`,
            },
            card2_duration: {
                type: ['string', 'null'],
                default: `4–7 Days`,
            },
            card3_title: {
                type: ['string', 'null'],
                default: `Creative Retreat`,
            },
            card3_description: {
                type: ['string', 'null'],
                default: `Write, draw, make. Creativity flows when the mind quiets. Supported by gentle structure, ample solitude, and evening gatherings around the fire.`,
            },
            card3_duration: {
                type: ['string', 'null'],
                default: `5–10 Days`,
            }
        },
        example: { attributes: { section_title: `Immersions`, card1_title: `Silent Immersion`, card1_description: `Three days of noble silence. Guided meditation, mindful movement, and contemplative practices. Learn to hear the voice beneath the noise.`, card1_duration: `3–5 Days`, card2_title: `Nature Practice`, card2_description: `Forest bathing, wild foraging, earth-based rituals. Restore your relationship with the living world. Remember that you are nature, not separate from it.`, card2_duration: `4–7 Days`, card3_title: `Creative Retreat`, card3_description: `Write, draw, make. Creativity flows when the mind quiets. Supported by gentle structure, ample solitude, and evening gatherings around the fire.`, card3_duration: `5–10 Days` } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'py-32 px-6 bg-mist-200', 'data-block-name': 'experiences-grid' });
            const setAttributes = props.setAttributes; 
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-7xl mx-auto w-full' }, [' ', el(RichText, { tagName: 'h2', className: 'font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-charcoal-600 text-center mb-20', value: propOrDefault( props.attributes.section_title, 'section_title' ), onChange: function(val) { setAttributes( {section_title: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('div', { className: 'grid md:grid-cols-3 gap-8 md:gap-12' }, [' ', ' ', el('article', { className: 'bg-bone-100 p-10 md:p-12 transition-all duration-500 hover:[transform:translateY(-8px)] hover:shadow-[0_20px_60px_rgba(42,41,38,0.08)]' }, [' ', el(RichText, { tagName: 'h3', className: 'font-serif font-light text-3xl md:text-4xl leading-[1.3] text-charcoal-900 mb-6', value: propOrDefault( props.attributes.card1_title, 'card1_title' ), onChange: function(val) { setAttributes( {card1_title: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-base leading-[1.8] text-charcoal-700 mb-8', value: propOrDefault( props.attributes.card1_description, 'card1_description' ), onChange: function(val) { setAttributes( {card1_description: val }) } }), ' ', el(RichText, { tagName: 'span', className: 'font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700', value: propOrDefault( props.attributes.card1_duration, 'card1_duration' ), onChange: function(val) { setAttributes( {card1_duration: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', ' ', el('article', { className: 'bg-bone-100 p-10 md:p-12 transition-all duration-500 hover:[transform:translateY(-8px)] hover:shadow-[0_20px_60px_rgba(42,41,38,0.08)]' }, [' ', el(RichText, { tagName: 'h3', className: 'font-serif font-light text-3xl md:text-4xl leading-[1.3] text-charcoal-900 mb-6', value: propOrDefault( props.attributes.card2_title, 'card2_title' ), onChange: function(val) { setAttributes( {card2_title: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-base leading-[1.8] text-charcoal-700 mb-8', value: propOrDefault( props.attributes.card2_description, 'card2_description' ), onChange: function(val) { setAttributes( {card2_description: val }) } }), ' ', el(RichText, { tagName: 'span', className: 'font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700', value: propOrDefault( props.attributes.card2_duration, 'card2_duration' ), onChange: function(val) { setAttributes( {card2_duration: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', ' ', el('article', { className: 'bg-bone-100 p-10 md:p-12 transition-all duration-500 hover:[transform:translateY(-8px)] hover:shadow-[0_20px_60px_rgba(42,41,38,0.08)]' }, [' ', el(RichText, { tagName: 'h3', className: 'font-serif font-light text-3xl md:text-4xl leading-[1.3] text-charcoal-900 mb-6', value: propOrDefault( props.attributes.card3_title, 'card3_title' ), onChange: function(val) { setAttributes( {card3_title: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-base leading-[1.8] text-charcoal-700 mb-8', value: propOrDefault( props.attributes.card3_description, 'card3_description' ), onChange: function(val) { setAttributes( {card3_description: val }) } }), ' ', el(RichText, { tagName: 'span', className: 'font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700', value: propOrDefault( props.attributes.card3_duration, 'card3_duration' ), onChange: function(val) { setAttributes( {card3_duration: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
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
                                    el(TextControl, {
                                        value: props.attributes.card1_title,
                                        help: __( '' ),
                                        label: __( 'Card 1 Title' ),
                                        onChange: function(val) { setAttributes({card1_title: val}) },
                                        type: 'text'
                                    }),
                                    el(BaseControl, {
                                        help: __( '' ),
                                        label: __( 'Card 1 Description' ),
                                    }, [
                                        el(RichText, {
                                            value: props.attributes.card1_description,
                                            style: {
                                                    border: '1px solid black',
                                                    padding: '6px 8px',
                                                    minHeight: '80px',
                                                    border: '1px solid rgb(117, 117, 117)',
                                                    fontSize: '13px',
                                                    lineHeight: 'normal'
                                                },
                                            onChange: function(val) { setAttributes({card1_description: val}) },
                                        })
                                    ]),
                                    el(TextControl, {
                                        value: props.attributes.card1_duration,
                                        help: __( '' ),
                                        label: __( 'Card 1 Duration' ),
                                        onChange: function(val) { setAttributes({card1_duration: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.card2_title,
                                        help: __( '' ),
                                        label: __( 'Card 2 Title' ),
                                        onChange: function(val) { setAttributes({card2_title: val}) },
                                        type: 'text'
                                    }),
                                    el(BaseControl, {
                                        help: __( '' ),
                                        label: __( 'Card 2 Description' ),
                                    }, [
                                        el(RichText, {
                                            value: props.attributes.card2_description,
                                            style: {
                                                    border: '1px solid black',
                                                    padding: '6px 8px',
                                                    minHeight: '80px',
                                                    border: '1px solid rgb(117, 117, 117)',
                                                    fontSize: '13px',
                                                    lineHeight: 'normal'
                                                },
                                            onChange: function(val) { setAttributes({card2_description: val}) },
                                        })
                                    ]),
                                    el(TextControl, {
                                        value: props.attributes.card2_duration,
                                        help: __( '' ),
                                        label: __( 'Card 2 Duration' ),
                                        onChange: function(val) { setAttributes({card2_duration: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.card3_title,
                                        help: __( '' ),
                                        label: __( 'Card 3 Title' ),
                                        onChange: function(val) { setAttributes({card3_title: val}) },
                                        type: 'text'
                                    }),
                                    el(BaseControl, {
                                        help: __( '' ),
                                        label: __( 'Card 3 Description' ),
                                    }, [
                                        el(RichText, {
                                            value: props.attributes.card3_description,
                                            style: {
                                                    border: '1px solid black',
                                                    padding: '6px 8px',
                                                    minHeight: '80px',
                                                    border: '1px solid rgb(117, 117, 117)',
                                                    fontSize: '13px',
                                                    lineHeight: 'normal'
                                                },
                                            onChange: function(val) { setAttributes({card3_description: val}) },
                                        })
                                    ]),
                                    el(TextControl, {
                                        value: props.attributes.card3_duration,
                                        help: __( '' ),
                                        label: __( 'Card 3 Duration' ),
                                        onChange: function(val) { setAttributes({card3_duration: val}) },
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
