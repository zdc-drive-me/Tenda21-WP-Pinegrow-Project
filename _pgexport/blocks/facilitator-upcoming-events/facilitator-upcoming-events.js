
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
    
    const block = registerBlockType( 'tenda21/facilitator-upcoming-events', {
        apiVersion: 2,
        title: 'Facilitator Upcoming Events',
        description: 'Upcoming Events connected to the current Facilitator via event_facilitators relationship field. Requires pg_query_args filter in custom.php.',
        icon: 'block-default',
        category: 'tenda21_facilitator',
        keywords: [],
        supports: {},
        attributes: {
            section_heading: {
                type: ['string', 'null'],
                default: `Upcoming Sessions`,
            },
            event_label: {
                type: ['string', 'null'],
                default: `Event`,
            },
            start_label: {
                type: ['string', 'null'],
                default: `Start`,
            },
            end_label: {
                type: ['string', 'null'],
                default: `End`,
            },
            format_label: {
                type: ['string', 'null'],
                default: `Format`,
            },
            location_label: {
                type: ['string', 'null'],
                default: `Location`,
            },
            price_label: {
                type: ['string', 'null'],
                default: `Price`,
            },
            status_label: {
                type: ['string', 'null'],
                default: `Status`,
            },
            cta_label: {
                type: ['string', 'null'],
                default: `Register`,
            },
            empty_state_label: {
                type: ['string', 'null'],
                default: `No upcoming sessions for this facilitator yet.`,
            }
        },
        example: { attributes: { section_heading: `Upcoming Sessions`, event_label: `Event`, start_label: `Start`, end_label: `End`, format_label: `Format`, location_label: `Location`, price_label: `Price`, status_label: `Status`, cta_label: `Register`, empty_state_label: `No upcoming sessions for this facilitator yet.` } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'py-24 px-6 bg-mist-100' });
            const setAttributes = props.setAttributes; 
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-6xl mx-auto w-full' }, [' ', el(RichText, { tagName: 'h2', className: 'font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-charcoal-600 mb-12', value: propOrDefault( props.attributes.section_heading, 'section_heading' ), onChange: function(val) { setAttributes( {section_heading: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('div', { className: 'space-y-8' }, [' ', ' ', el('article', { className: 'bg-bone-100 p-8 md:p-10 border-l-2 border-forest-700' }, [' ', el('div', { className: 'grid md:grid-cols-3 gap-8 items-start' }, [' ', el('div', { className: 'md:col-span-2 space-y-4' }, [' ', ' ', el('div', {}, [' ', el(RichText, { tagName: 'span', className: 'font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1', value: propOrDefault( props.attributes.event_label, 'event_label' ), onChange: function(val) { setAttributes( {event_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('a', { href: '#', className: 'font-serif font-light text-2xl md:text-3xl leading-[1.3] text-charcoal-900 hover:text-forest-800 transition-colors block' }, 'Event Title'), ' ']), ' ', ' ', el('div', { className: 'flex flex-wrap gap-x-10 gap-y-3 text-sm' }, [' ', el('div', {}, [' ', el(RichText, { tagName: 'span', className: 'font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1', value: propOrDefault( props.attributes.start_label, 'start_label' ), onChange: function(val) { setAttributes( {start_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('span', { className: 'font-sans text-charcoal-800' }, 'DD MMM YYYY'), ' ', el('span', { className: 'font-sans text-charcoal-600 ml-2' }, '00:00'), ' ']), ' ', el('div', {}, [' ', el(RichText, { tagName: 'span', className: 'font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1', value: propOrDefault( props.attributes.end_label, 'end_label' ), onChange: function(val) { setAttributes( {end_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('span', { className: 'font-sans text-charcoal-800' }, 'DD MMM YYYY'), ' ', el('span', { className: 'font-sans text-charcoal-600 ml-2' }, '00:00'), ' ']), ' ']), ' ', ' ', el('div', { className: 'flex gap-10 text-sm' }, [' ', el('div', {}, [' ', el(RichText, { tagName: 'span', className: 'font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1', value: propOrDefault( props.attributes.format_label, 'format_label' ), onChange: function(val) { setAttributes( {format_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('span', { className: 'font-sans text-charcoal-800' }, 'In-person'), ' ']), ' ', el('div', {}, [' ', el(RichText, { tagName: 'span', className: 'font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1', value: propOrDefault( props.attributes.location_label, 'location_label' ), onChange: function(val) { setAttributes( {location_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('span', { className: 'font-sans text-charcoal-800' }, 'Tenda 21, Serra da Estrela'), ' ']), ' ']), ' ']), ' ', ' ', el('div', { className: 'space-y-5' }, [' ', el('div', {}, [' ', el(RichText, { tagName: 'span', className: 'font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1', value: propOrDefault( props.attributes.price_label, 'price_label' ), onChange: function(val) { setAttributes( {price_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('span', { className: 'font-sans text-sm text-charcoal-800' }, '€ —'), ' ']), ' ', el('div', {}, [' ', el(RichText, { tagName: 'span', className: 'font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1', value: propOrDefault( props.attributes.status_label, 'status_label' ), onChange: function(val) { setAttributes( {status_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('span', { className: 'font-sans text-sm text-charcoal-800' }, 'Open'), ' ']), ' ', el('div', { className: 'pt-2' }, [' ', el('a', { href: '#', className: 'inline-block bg-clay-500 text-bone-50 font-sans font-medium text-xs uppercase tracking-[0.12em] px-8 py-3 transition-all duration-300 hover:bg-clay-600' }, [' ', el(RichText, { tagName: 'span', value: propOrDefault( props.attributes.cta_label, 'cta_label' ), onChange: function(val) { setAttributes( {cta_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']), ' ']), ' ']), ' ']), ' ']), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-base text-charcoal-600 mt-10 opacity-80', value: propOrDefault( props.attributes.empty_state_label, 'empty_state_label' ), onChange: function(val) { setAttributes( {empty_state_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.section_heading,
                                        help: __( '' ),
                                        label: __( 'Section Heading' ),
                                        onChange: function(val) { setAttributes({section_heading: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.event_label,
                                        help: __( '' ),
                                        label: __( 'Event Label' ),
                                        onChange: function(val) { setAttributes({event_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.start_label,
                                        help: __( '' ),
                                        label: __( 'Start Label' ),
                                        onChange: function(val) { setAttributes({start_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.end_label,
                                        help: __( '' ),
                                        label: __( 'End Label' ),
                                        onChange: function(val) { setAttributes({end_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.format_label,
                                        help: __( '' ),
                                        label: __( 'Format Label' ),
                                        onChange: function(val) { setAttributes({format_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.location_label,
                                        help: __( '' ),
                                        label: __( 'Location Label' ),
                                        onChange: function(val) { setAttributes({location_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.price_label,
                                        help: __( '' ),
                                        label: __( 'Price Label' ),
                                        onChange: function(val) { setAttributes({price_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.status_label,
                                        help: __( '' ),
                                        label: __( 'Status Label' ),
                                        onChange: function(val) { setAttributes({status_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.cta_label,
                                        help: __( '' ),
                                        label: __( 'Button Label' ),
                                        onChange: function(val) { setAttributes({cta_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.empty_state_label,
                                        help: __( '' ),
                                        label: __( 'Empty State Message' ),
                                        onChange: function(val) { setAttributes({empty_state_label: val}) },
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
