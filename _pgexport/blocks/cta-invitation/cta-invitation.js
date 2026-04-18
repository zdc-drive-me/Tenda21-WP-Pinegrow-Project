
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
    
    const block = registerBlockType( 'tenda21/cta-invitation', {
        apiVersion: 2,
        title: 'CTA Invitation',
        description: 'Call to action section with a message and contact button',
        icon: 'block-default',
        category: 'tenda21_blocks',
        keywords: [],
        supports: {},
        attributes: {
            heading: {
                type: ['string', 'null'],
                default: `When you're ready,<br>we're here.`,
            },
            description: {
                type: ['string', 'null'],
                default: `Retreats run year-round with limited capacity. Reach out to learn about upcoming dates or inquire about a custom immersion for your group.`,
            },
            button_email: {
                type: ['string', 'null'],
                default: `Get in Touch`,
            },
            button_label: {
                type: ['string', 'null'],
                default: `Get in Touch`,
            }
        },
        example: { attributes: { heading: `When you're ready,<br>we're here.`, description: `Retreats run year-round with limited capacity. Reach out to learn about upcoming dates or inquire about a custom immersion for your group.`, button_email: `Get in Touch`, button_label: `Get in Touch` } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'py-48 px-6 bg-bone-200', 'data-block-name': 'cta-invitation' });
            const setAttributes = props.setAttributes; 
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-3xl mx-auto text-center w-full' }, [' ', el(RichText, { tagName: 'p', className: 'font-serif font-light text-[clamp(1.5rem,3.5vw,2.5rem)] leading-[1.4] text-charcoal-800 mb-12', value: propOrDefault( props.attributes.heading, 'heading' ), onChange: function(val) { setAttributes( {heading: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-lg leading-[1.8] text-charcoal-700 mb-16 max-w-[65ch] mx-auto', value: propOrDefault( props.attributes.description, 'description' ), onChange: function(val) { setAttributes( {description: val }) } }), ' ', el(RichText, { tagName: 'a', href: 'mailto:hello@tenda21.com', className: 'inline-block bg-clay-500 text-bone-50 font-sans font-medium text-sm uppercase tracking-[0.12em] px-12 py-5 transition-all duration-300 hover:bg-clay-600 hover:[transform:translateY(-2px)] hover:shadow-[0_8px_24px_rgba(0,0,0,0.12)]', value: 'mailto:' + props.attributes.button_email, onChange: function(val) { setAttributes( {button_email: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.heading,
                                        help: __( '' ),
                                        label: __( 'Heading' ),
                                        onChange: function(val) { setAttributes({heading: val}) },
                                        type: 'text'
                                    }),
                                    el(BaseControl, {
                                        help: __( '' ),
                                        label: __( 'Description' ),
                                    }, [
                                        el(RichText, {
                                            value: props.attributes.description,
                                            style: {
                                                    border: '1px solid black',
                                                    padding: '6px 8px',
                                                    minHeight: '80px',
                                                    border: '1px solid rgb(117, 117, 117)',
                                                    fontSize: '13px',
                                                    lineHeight: 'normal'
                                                },
                                            onChange: function(val) { setAttributes({description: val}) },
                                        })
                                    ]),
                                    el(TextControl, {
                                        value: props.attributes.button_email,
                                        help: __( '' ),
                                        label: __( 'Button email' ),
                                        onChange: function(val) { setAttributes({button_email: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.button_label,
                                        help: __( '' ),
                                        label: __( 'Button label' ),
                                        onChange: function(val) { setAttributes({button_label: val}) },
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
