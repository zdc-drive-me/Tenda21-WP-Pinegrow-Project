
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
    
    const block = registerBlockType( 'tenda21/practical-info', {
        apiVersion: 2,
        title: 'Practical Info',
        description: 'Details section with location, accommodation, and inclusions',
        icon: 'block-default',
        category: 'tenda21_blocks',
        keywords: [],
        supports: {},
        attributes: {
            section_label: {
                type: ['string', 'null'],
                default: `Details`,
            },
            location_heading: {
                type: ['string', 'null'],
                default: `Location`,
            },
            location_text: {
                type: ['string', 'null'],
                default: `Nestled in the foothills of Serra da Estrela, Portugal. Two hours from Porto, a world away from everywhere else.`,
            },
            accommodation_heading: {
                type: ['string', 'null'],
                default: `Accommodation`,
            },
            accommodation_text: {
                type: ['string', 'null'],
                default: `Private canvas tents with wooden floors, linen bedding, and wood-burning stoves. Shared bathhouse with hot water and composting toilets.`,
            },
            included_heading: {
                type: ['string', 'null'],
                default: `What's Included`,
            },
            included_text: {
                type: ['string', 'null'],
                default: `Three seasonal vegetarian meals daily, guided practices, access to trails and natural swimming spots, herbal tea library, journal and pen.`,
            },
            not_included_heading: {
                type: ['string', 'null'],
                default: `Not Included`,
            },
            not_included_text: {
                type: ['string', 'null'],
                default: `Your phone. (We lock them away on arrival. You'll thank us later.)`,
            }
        },
        example: { attributes: { section_label: `Details`, location_heading: `Location`, location_text: `Nestled in the foothills of Serra da Estrela, Portugal. Two hours from Porto, a world away from everywhere else.`, accommodation_heading: `Accommodation`, accommodation_text: `Private canvas tents with wooden floors, linen bedding, and wood-burning stoves. Shared bathhouse with hot water and composting toilets.`, included_heading: `What's Included`, included_text: `Three seasonal vegetarian meals daily, guided practices, access to trails and natural swimming spots, herbal tea library, journal and pen.`, not_included_heading: `Not Included`, not_included_text: `Your phone. (We lock them away on arrival. You'll thank us later.)` } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'py-32 px-6 bg-bone-100', 'data-block-name': 'practical-info' });
            const setAttributes = props.setAttributes; 
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-5xl mx-auto w-full' }, [' ', el(RichText, { tagName: 'h2', className: 'font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-charcoal-600 text-center mb-20', value: propOrDefault( props.attributes.section_label, 'section_label' ), onChange: function(val) { setAttributes( {section_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('div', { className: 'grid md:grid-cols-2 gap-12 md:gap-20' }, [' ', el('div', { className: 'space-y-8' }, [' ', el('div', {}, [' ', el(RichText, { tagName: 'h3', className: 'font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-charcoal-600 mb-3', value: propOrDefault( props.attributes.location_heading, 'location_heading' ), onChange: function(val) { setAttributes( {location_heading: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-lg leading-[1.8] text-charcoal-800', value: propOrDefault( props.attributes.location_text, 'location_text' ), onChange: function(val) { setAttributes( {location_text: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', el('div', {}, [' ', el(RichText, { tagName: 'h3', className: 'font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-charcoal-600 mb-3', value: propOrDefault( props.attributes.accommodation_heading, 'accommodation_heading' ), onChange: function(val) { setAttributes( {accommodation_heading: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-lg leading-[1.8] text-charcoal-800', value: propOrDefault( props.attributes.accommodation_text, 'accommodation_text' ), onChange: function(val) { setAttributes( {accommodation_text: val }) } }), ' ']), ' ']), ' ', el('div', { className: 'space-y-8' }, [' ', el('div', {}, [' ', el(RichText, { tagName: 'h3', className: 'font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-charcoal-600 mb-3', value: propOrDefault( props.attributes.included_heading, 'included_heading' ), onChange: function(val) { setAttributes( {included_heading: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-lg leading-[1.8] text-charcoal-800', value: propOrDefault( props.attributes.included_text, 'included_text' ), onChange: function(val) { setAttributes( {included_text: val }) } }), ' ']), ' ', el('div', {}, [' ', el(RichText, { tagName: 'h3', className: 'font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-charcoal-600 mb-3', value: propOrDefault( props.attributes.not_included_heading, 'not_included_heading' ), onChange: function(val) { setAttributes( {not_included_heading: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-lg leading-[1.8] text-charcoal-800', value: propOrDefault( props.attributes.not_included_text, 'not_included_text' ), onChange: function(val) { setAttributes( {not_included_text: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']), ' ']), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.section_label,
                                        help: __( '' ),
                                        label: __( 'Section Label' ),
                                        onChange: function(val) { setAttributes({section_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.location_heading,
                                        help: __( '' ),
                                        label: __( 'Location Heading' ),
                                        onChange: function(val) { setAttributes({location_heading: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.location_text,
                                        help: __( '' ),
                                        label: __( 'Location Text' ),
                                        onChange: function(val) { setAttributes({location_text: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.accommodation_heading,
                                        help: __( '' ),
                                        label: __( 'Accommodation Heading' ),
                                        onChange: function(val) { setAttributes({accommodation_heading: val}) },
                                        type: 'text'
                                    }),
                                    el(BaseControl, {
                                        help: __( '' ),
                                        label: __( 'Accommodation Text' ),
                                    }, [
                                        el(RichText, {
                                            value: props.attributes.accommodation_text,
                                            style: {
                                                    border: '1px solid black',
                                                    padding: '6px 8px',
                                                    minHeight: '80px',
                                                    border: '1px solid rgb(117, 117, 117)',
                                                    fontSize: '13px',
                                                    lineHeight: 'normal'
                                                },
                                            onChange: function(val) { setAttributes({accommodation_text: val}) },
                                        })
                                    ]),
                                    el(TextControl, {
                                        value: props.attributes.included_heading,
                                        help: __( '' ),
                                        label: __( 'Included Heading' ),
                                        onChange: function(val) { setAttributes({included_heading: val}) },
                                        type: 'text'
                                    }),
                                    el(BaseControl, {
                                        help: __( '' ),
                                        label: __( 'Included Text' ),
                                    }, [
                                        el(RichText, {
                                            value: props.attributes.included_text,
                                            style: {
                                                    border: '1px solid black',
                                                    padding: '6px 8px',
                                                    minHeight: '80px',
                                                    border: '1px solid rgb(117, 117, 117)',
                                                    fontSize: '13px',
                                                    lineHeight: 'normal'
                                                },
                                            onChange: function(val) { setAttributes({included_text: val}) },
                                        })
                                    ]),
                                    el(TextControl, {
                                        value: props.attributes.not_included_heading,
                                        help: __( '' ),
                                        label: __( 'Not Included Heading' ),
                                        onChange: function(val) { setAttributes({not_included_heading: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.not_included_text,
                                        help: __( '' ),
                                        label: __( 'Not Included Text' ),
                                        onChange: function(val) { setAttributes({not_included_text: val}) },
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
