
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
    
    const block = registerBlockType( 'tenda21/event-hero', {
        apiVersion: 2,
        title: 'Event Hero',
        description: 'Single Event hero with relationships, meta, and booking CTA',
        icon: 'block-default',
        category: 'tenda21_event',
        keywords: [],
        supports: {},
        attributes: {
            back_link_label: {
                type: ['string', 'null'],
                default: `← Back to Events`,
            },
            experience_label: {
                type: ['string', 'null'],
                default: `from the Experience`,
            },
            type_label: {
                type: ['string', 'null'],
                default: `Type`,
            },
            location_label: {
                type: ['string', 'null'],
                default: `Location`,
            },
            facilitated_by_label: {
                type: ['string', 'null'],
                default: `Facilitated by`,
            },
            starts_label: {
                type: ['string', 'null'],
                default: `From`,
            },
            ends_label: {
                type: ['string', 'null'],
                default: `To`,
            },
            investment_label: {
                type: ['string', 'null'],
                default: `Investment`,
            },
            booking_note: {
                type: ['string', 'null'],
                default: `Need a custom date or private immersion? Mention it in your note.`,
            }
        },
        example: { attributes: { back_link_label: `← Back to Events`, experience_label: `from the Experience`, type_label: `Type`, location_label: `Location`, facilitated_by_label: `Facilitated by`, starts_label: `From`, ends_label: `To`, investment_label: `Investment`, booking_note: `Need a custom date or private immersion? Mention it in your note.` } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'pt-28 pb-0 bg-bone-200' });
            const setAttributes = props.setAttributes; 
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-6xl mx-auto px-6' }, [' ', ' ', el('a', { href: 'events.html', className: 'inline-flex items-center gap-2 text-xs font-sans uppercase tracking-[0.2em] text-forest-700 hover:text-forest-800 transition-colors mb-8 block' }, [' ', el(RichText, { tagName: 'span', value: propOrDefault( props.attributes.back_link_label, 'back_link_label' ), onChange: function(val) { setAttributes( {back_link_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', ' ', el('div', { className: 'w-full aspect-[16/7] bg-mist-300 bg-cover bg-center border border-mist-400 overflow-hidden' }), ' ', ' ', el('div', { className: 'grid gap-10 lg:grid-cols-[1.2fr,0.8fr] pt-10 pb-16' }, [' ', ' ', el('div', { className: 'space-y-7' }, [' ', el('div', { className: 'space-y-4' }, [' ', el('div', { className: 'space-y-0.5' }, [' ', el(RichText, { tagName: 'p', className: 'font-sans uppercase text-[0.65rem] tracking-[0.25em] text-charcoal-500', value: propOrDefault( props.attributes.experience_label, 'experience_label' ), onChange: function(val) { setAttributes( {experience_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('a', { href: '#', className: 'font-sans inline-flex items-center text-xs uppercase tracking-[0.2em] text-charcoal-700 hover:text-charcoal-900 transition-colors' }, 'Silent Immersion'), ' ']), ' ', el('h1', { className: 'font-serif font-light text-[clamp(2.4rem,5vw,4rem)] leading-[1.15] tracking-[0.01em] text-charcoal-900' }, 'Return to Stillness Retreat'), ' ', el('p', { className: 'font-sans font-light text-base leading-[1.85] text-charcoal-600 max-w-[58ch]' }, 'A three-day contemplative retreat with noble silence, mindful movement, and evening integration fires led by Ana Silva and guests.'), ' ']), ' ', ' ', el('div', { className: 'flex flex-wrap gap-8 pt-5 border-t border-mist-400' }, [' ', el('div', { className: 'space-y-1' }, [' ', el(RichText, { tagName: 'span', className: 'font-sans uppercase text-[0.6rem] tracking-[0.2em] font-medium text-charcoal-400 block', value: propOrDefault( props.attributes.type_label, 'type_label' ), onChange: function(val) { setAttributes( {type_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('span', { className: 'font-sans text-sm text-charcoal-700' }, 'On-site'), ' ']), ' ', el('div', { className: 'space-y-1' }, [' ', el(RichText, { tagName: 'span', className: 'font-sans uppercase text-[0.6rem] tracking-[0.2em] font-medium text-charcoal-400 block', value: propOrDefault( props.attributes.location_label, 'location_label' ), onChange: function(val) { setAttributes( {location_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('span', { className: 'font-sans text-sm text-charcoal-700' }, 'Serra da Estrela · Portugal'), ' ']), ' ', el('div', { className: 'space-y-1' }, [' ', el(RichText, { tagName: 'span', className: 'font-sans uppercase text-[0.6rem] tracking-[0.2em] font-medium text-charcoal-400 block', value: propOrDefault( props.attributes.facilitated_by_label, 'facilitated_by_label' ), onChange: function(val) { setAttributes( {facilitated_by_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('div', { className: 'flex flex-wrap gap-2 pt-0.5', 'data-repeater': 'event_facilitators' }, [' ', el('a', { href: '#', className: 'font-sans inline-flex items-center text-xs uppercase tracking-[0.15em] border border-mist-500 text-charcoal-700 hover:border-charcoal-700 hover:text-charcoal-900 transition-colors px-3 py-1' }, 'Ana Silva'), ' ', el('a', { href: '#', className: 'font-sans inline-flex items-center text-xs uppercase tracking-[0.15em] border border-mist-500 text-charcoal-700 hover:border-charcoal-700 hover:text-charcoal-900 transition-colors px-3 py-1' }, 'Rafael Santos'), ' ']), ' ']), ' ']), ' ']), ' ', ' ', el('div', { className: 'space-y-4' }, [' ', ' ', el('div', { className: 'border border-mist-400 bg-bone-100/70 px-4 py-3 flex items-center justify-between gap-2' }, [' ', el('div', { className: 'flex items-baseline gap-1.5' }, [' ', el(RichText, { tagName: 'span', className: 'font-sans uppercase text-[0.55rem] tracking-[0.2em] text-charcoal-400 shrink-0', value: propOrDefault( props.attributes.starts_label, 'starts_label' ), onChange: function(val) { setAttributes( {starts_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('span', { className: 'font-serif text-sm text-charcoal-900' }, '12 April 2024'), ' ', el('span', { className: 'font-sans text-[0.65rem] text-charcoal-500' }, '09:00'), ' ']), ' ', el('span', { className: 'font-sans text-[0.6rem] text-charcoal-300 shrink-0 select-none' }, '→'), ' ', el('div', { className: 'flex items-baseline gap-1.5' }, [' ', el(RichText, { tagName: 'span', className: 'font-sans uppercase text-[0.55rem] tracking-[0.2em] text-charcoal-400 shrink-0', value: propOrDefault( props.attributes.ends_label, 'ends_label' ), onChange: function(val) { setAttributes( {ends_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('span', { className: 'font-serif text-sm text-charcoal-800' }, '14 April 2024'), ' ', el('span', { className: 'font-sans text-[0.65rem] text-charcoal-500' }, '14:00'), ' ']), ' ', el('span', { className: 'font-sans text-[0.55rem] uppercase tracking-[0.15em] text-charcoal-400 shrink-0 hidden lg:block' }, 'GMT+1'), ' ']), ' ', ' ', el('div', { className: 'flex flex-col gap-5 bg-charcoal-900 px-5 py-5 text-bone-50' }, [' ', el('div', { className: 'flex items-end justify-between' }, [' ', el('div', { className: 'space-y-1' }, [' ', el(RichText, { tagName: 'span', className: 'font-sans uppercase text-[0.55rem] tracking-[0.25em] font-medium text-bone-200/60 block', value: propOrDefault( props.attributes.investment_label, 'investment_label' ), onChange: function(val) { setAttributes( {investment_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('span', { className: 'font-serif text-3xl leading-tight text-bone-50' }, '€420'), ' ']), ' ', el('span', { className: 'inline-flex items-center border border-bone-200/30 px-3 py-1 text-[0.58rem] font-sans uppercase tracking-[0.18em] text-bone-200' }, 'Few seats left'), ' ']), ' ', el(RichText, { tagName: 'p', className: 'font-sans text-xs leading-relaxed text-bone-200/55', value: propOrDefault( props.attributes.booking_note, 'booking_note' ), onChange: function(val) { setAttributes( {booking_note: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('a', { href: 'mailto:hello@tenda21.com', className: 'inline-flex items-center justify-center bg-bone-50 text-charcoal-900 font-sans font-medium text-xs uppercase tracking-[0.2em] px-8 py-3.5 transition-all duration-300 hover:bg-clay-400 hover:text-bone-50' }, 'Book Your Place'), ' ']), ' ']), ' ']), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.back_link_label,
                                        help: __( '' ),
                                        label: __( 'Back Link Label' ),
                                        onChange: function(val) { setAttributes({back_link_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.experience_label,
                                        help: __( '' ),
                                        label: __( 'Related Experience Label' ),
                                        onChange: function(val) { setAttributes({experience_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.type_label,
                                        help: __( '' ),
                                        label: __( 'Type Label' ),
                                        onChange: function(val) { setAttributes({type_label: val}) },
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
                                        value: props.attributes.facilitated_by_label,
                                        help: __( '' ),
                                        label: __( 'Facilitated By Label' ),
                                        onChange: function(val) { setAttributes({facilitated_by_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.starts_label,
                                        help: __( '' ),
                                        label: __( 'Starts Label' ),
                                        onChange: function(val) { setAttributes({starts_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.ends_label,
                                        help: __( '' ),
                                        label: __( 'Ends Label' ),
                                        onChange: function(val) { setAttributes({ends_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.investment_label,
                                        help: __( '' ),
                                        label: __( 'Investment Label' ),
                                        onChange: function(val) { setAttributes({investment_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.booking_note,
                                        help: __( '' ),
                                        label: __( 'Booking Note' ),
                                        onChange: function(val) { setAttributes({booking_note: val}) },
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
