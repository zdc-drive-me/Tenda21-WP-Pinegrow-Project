
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
    
    const block = registerBlockType( 'tenda21/event-row', {
        apiVersion: 2,
        title: 'Event Row',
        description: 'Single event row with thumbnail, facilitators, schedule, and booking metadata.',
        icon: 'block-default',
        category: 'tenda21_event',
        keywords: [],
        supports: {},
        attributes: {
            event_featured: {
                type: ['object', 'null'],
                default: {id: 0, url: 'https://images.unsplash.com/photo-1502082553048-f009c37129b9?auto=format&fit=crop&w=400&q=80', size: '', svg: '', alt: null},
            },
            event_experience: {
                type: ['object', 'null'],
                default: {post_id: 0, url: '#', title: '', 'post_type': null},
            },
            event_location_type: {
                type: ['string', 'null'],
                default: `On-site`,
            },
            event_excerpt: {
                type: ['string', 'null'],
                default: `Three days of contemplative silence, mindful movement, and nature-based ritual held in a small circle.`,
            },
            event_location: {
                type: ['string', 'null'],
                default: `Serra da Estrela · Portugal`,
            },
            event_start_date: {
                type: ['string', 'null'],
                default: `12 April 2024`,
            },
            event_start_time: {
                type: ['string', 'null'],
                default: `09:00`,
            },
            event_end_date: {
                type: ['string', 'null'],
                default: `14 April 2024`,
            },
            event_end_time: {
                type: ['string', 'null'],
                default: `14:00`,
            },
            event_price_label: {
                type: ['string', 'null'],
                default: `Investment`,
            },
            event_price: {
                type: ['string', 'null'],
                default: `€420`,
            },
            event_booking_status: {
                type: ['string', 'null'],
                default: `Few seats left`,
            },
            event_booking: {
                type: ['object', 'null'],
                default: {post_id: 0, url: '#', title: '', 'post_type': null},
            }
        },
        example: { attributes: { event_featured: {id: 0, url: 'https://images.unsplash.com/photo-1502082553048-f009c37129b9?auto=format&fit=crop&w=400&q=80', size: '', svg: '', alt: null}, event_experience: {post_id: 0, url: '#', title: '', 'post_type': null}, event_location_type: `On-site`, event_excerpt: `Three days of contemplative silence, mindful movement, and nature-based ritual held in a small circle.`, event_location: `Serra da Estrela · Portugal`, event_start_date: `12 April 2024`, event_start_time: `09:00`, event_end_date: `14 April 2024`, event_end_time: `14:00`, event_price_label: `Investment`, event_price: `€420`, event_booking_status: `Few seats left`, event_booking: {post_id: 0, url: '#', title: '', 'post_type': null} } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'bg-bone-50/90 border border-mist-300 px-4 py-4 md:px-6 md:py-5 shadow-[0_1px_0_rgba(42,41,38,0.04)]' });
            const setAttributes = props.setAttributes; 
            
            props.event_featured = useSelect(function( select ) {
                return {
                    event_featured: props.attributes.event_featured.id ? select('core').getMedia(props.attributes.event_featured.id) : undefined
                };
            }, [props.attributes.event_featured] ).event_featured;
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('article', { ...blockProps }, [' ', el('div', { className: 'grid grid-cols-[96px_1fr] md:grid-cols-[120px_1fr_148px_164px] gap-4 md:gap-x-6 items-start' }, [' ', ' ', el('div', { className: 'aspect-square rounded-sm bg-mist-300 bg-cover bg-center shrink-0', style: { ...((propOrDefault( props.attributes.event_featured.url, 'event_featured', 'url' ) ? ('url(' + propOrDefault( props.attributes.event_featured.url, 'event_featured', 'url' ) + ')') : null !== null && propOrDefault( props.attributes.event_featured.url, 'event_featured', 'url' ) ? ('url(' + propOrDefault( props.attributes.event_featured.url, 'event_featured', 'url' ) + ')') : null !== '') ? {backgroundImage: propOrDefault( props.attributes.event_featured.url, 'event_featured', 'url' ) ? ('url(' + propOrDefault( props.attributes.event_featured.url, 'event_featured', 'url' ) + ')') : null} : {}) } }), ' ', ' ', el('div', { className: 'min-w-0 space-y-2' }, [' ', el('div', { className: 'flex flex-wrap items-baseline gap-x-4 gap-y-1' }, [' ', el('a', { href: propOrDefault( props.attributes.event_experience.url, 'event_experience', 'url' ), className: 'font-serif text-xl md:text-2xl leading-tight text-charcoal-900 underline-offset-4 hover:underline', onClick: function(e) { e.preventDefault(); } }, 'Silent Immersion Weekend'), ' ', el('span', { className: 'inline-flex items-center gap-1.5 text-[0.65rem] font-sans uppercase tracking-[0.25em] text-charcoal-500' }, [' ', el('span', { className: 'h-px w-4 bg-charcoal-400' }), ' ', el(RichText, { tagName: 'span', value: propOrDefault( props.attributes.event_location_type, 'event_location_type' ), onChange: function(val) { setAttributes( {event_location_type: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']), ' ', el('div', { className: 'flex flex-wrap items-center gap-x-3 gap-y-1.5' }, [' ', el('span', { className: 'font-sans uppercase text-[0.55rem] tracking-[0.2em] text-charcoal-500' }, 'Guided by'), ' ', el('div', { className: 'flex flex-wrap gap-1.5', 'data-repeater': 'event_facilitators' }, [' ', el('a', { href: '#', className: 'inline-flex items-center border border-mist-400 px-2 py-0.5 text-[0.7rem] text-charcoal-700 hover:border-charcoal-700 transition-colors' }, 'Ana Silva'), ' ', el('a', { href: '#', className: 'inline-flex items-center border border-mist-400 px-2 py-0.5 text-[0.7rem] text-charcoal-700 hover:border-charcoal-700 transition-colors' }, 'Rafael Santos'), ' ']), ' ']), ' ', el(RichText, { tagName: 'p', className: 'font-sans text-sm leading-relaxed text-charcoal-600 line-clamp-2', value: propOrDefault( props.attributes.event_excerpt, 'event_excerpt' ), onChange: function(val) { setAttributes( {event_excerpt: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'span', className: 'font-sans text-xs text-charcoal-500', value: propOrDefault( props.attributes.event_location, 'event_location' ), onChange: function(val) { setAttributes( {event_location: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', ' ', el('div', { className: 'hidden md:flex flex-col gap-1.5 border-l border-mist-300 pl-5 self-stretch justify-center' }, [' ', el('div', { className: 'space-y-0.5' }, [' ', el('span', { className: 'font-sans uppercase text-[0.55rem] tracking-[0.3em] text-charcoal-500' }, 'Starts'), ' ', el(RichText, { tagName: 'p', className: 'font-serif text-base leading-tight text-charcoal-900', value: propOrDefault( props.attributes.event_start_date, 'event_start_date' ), onChange: function(val) { setAttributes( {event_start_date: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans text-[0.65rem] uppercase tracking-[0.2em] text-charcoal-600', value: propOrDefault( props.attributes.event_start_time, 'event_start_time' ), onChange: function(val) { setAttributes( {event_start_time: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', el('div', { className: 'h-px w-full bg-mist-300 my-1.5' }), ' ', el('div', { className: 'space-y-0.5' }, [' ', el('span', { className: 'font-sans uppercase text-[0.55rem] tracking-[0.3em] text-charcoal-500' }, 'Ends'), ' ', el(RichText, { tagName: 'p', className: 'font-serif text-sm leading-tight text-charcoal-700', value: propOrDefault( props.attributes.event_end_date, 'event_end_date' ), onChange: function(val) { setAttributes( {event_end_date: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans text-[0.65rem] uppercase tracking-[0.2em] text-charcoal-600', value: propOrDefault( props.attributes.event_end_time, 'event_end_time' ), onChange: function(val) { setAttributes( {event_end_time: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']), ' ', ' ', el('div', { className: 'hidden md:flex flex-col justify-between gap-4 border-l border-mist-300 pl-5 self-stretch' }, [' ', el('div', { className: 'space-y-1.5' }, [' ', el(RichText, { tagName: 'span', className: 'font-sans uppercase text-[0.55rem] tracking-[0.2em] text-charcoal-500 block', value: propOrDefault( props.attributes.event_price_label, 'event_price_label' ), onChange: function(val) { setAttributes( {event_price_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'span', className: 'font-serif text-xl text-charcoal-900', value: propOrDefault( props.attributes.event_price, 'event_price' ), onChange: function(val) { setAttributes( {event_price: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('div', {}, [' ', el(RichText, { tagName: 'span', className: 'inline-flex items-center border border-charcoal-900/20 px-2.5 py-0.5 text-[0.6rem] font-sans uppercase tracking-[0.2em] text-charcoal-700', value: propOrDefault( props.attributes.event_booking_status, 'event_booking_status' ), onChange: function(val) { setAttributes( {event_booking_status: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']), ' ', el('a', { href: propOrDefault( props.attributes.event_booking.url, 'event_booking', 'url' ), className: 'inline-flex items-center justify-center bg-clay-500 text-bone-50 font-sans font-medium text-[0.65rem] uppercase tracking-[0.2em] px-5 py-2.5 transition-all duration-300 hover:bg-clay-600', onClick: function(e) { e.preventDefault(); } }, 'Book Your Place'), ' ']), ' ', ' ', el('div', { className: 'col-span-2 md:hidden flex items-center justify-between gap-3 border-t border-mist-300 pt-3' }, [' ', el('div', { className: 'space-y-0.5' }, [' ', el(RichText, { tagName: 'p', className: 'font-serif text-sm text-charcoal-900', value: propOrDefault( props.attributes.event_start_date, 'event_start_date' ), onChange: function(val) { setAttributes( {event_start_date: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans text-[0.6rem] uppercase tracking-[0.2em] text-charcoal-500', value: propOrDefault( props.attributes.event_start_time, 'event_start_time' ), onChange: function(val) { setAttributes( {event_start_time: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', el('div', { className: 'flex items-center gap-3' }, [' ', el(RichText, { tagName: 'span', className: 'font-serif text-lg text-charcoal-900', value: propOrDefault( props.attributes.event_price, 'event_price' ), onChange: function(val) { setAttributes( {event_price: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('a', { href: propOrDefault( props.attributes.event_booking.url, 'event_booking', 'url' ), className: 'inline-flex items-center justify-center bg-clay-500 text-bone-50 font-sans font-medium text-[0.6rem] uppercase tracking-[0.2em] px-4 py-2 hover:bg-clay-600', onClick: function(e) { e.preventDefault(); } }, 'Book'), ' ']), ' ']), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                        pgGetFeature4("pgMediaImageControl")('event_featured', setAttributes, props, 'full', true, 'Featured Image', '' ),
                                        
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    pgGetFeature4("pgUrlControl")('event_experience', setAttributes, props, 'Linked Experience', '', null ),
                                    el(TextControl, {
                                        value: props.attributes.event_location_type,
                                        help: __( '' ),
                                        label: __( 'Location Type' ),
                                        onChange: function(val) { setAttributes({event_location_type: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.event_excerpt,
                                        help: __( '' ),
                                        label: __( 'Excerpt' ),
                                        onChange: function(val) { setAttributes({event_excerpt: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.event_location,
                                        help: __( '' ),
                                        label: __( 'Location' ),
                                        onChange: function(val) { setAttributes({event_location: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.event_start_date,
                                        help: __( '' ),
                                        label: __( 'Start Date' ),
                                        onChange: function(val) { setAttributes({event_start_date: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.event_start_time,
                                        help: __( '' ),
                                        label: __( 'Start Time' ),
                                        onChange: function(val) { setAttributes({event_start_time: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.event_end_date,
                                        help: __( '' ),
                                        label: __( 'End Date' ),
                                        onChange: function(val) { setAttributes({event_end_date: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.event_end_time,
                                        help: __( '' ),
                                        label: __( 'End Time' ),
                                        onChange: function(val) { setAttributes({event_end_time: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.event_price_label,
                                        help: __( '' ),
                                        label: __( 'Price Label' ),
                                        onChange: function(val) { setAttributes({event_price_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.event_price,
                                        help: __( '' ),
                                        label: __( 'Price' ),
                                        onChange: function(val) { setAttributes({event_price: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.event_booking_status,
                                        help: __( '' ),
                                        label: __( 'Booking Status' ),
                                        onChange: function(val) { setAttributes({event_booking_status: val}) },
                                        type: 'text'
                                    }),
                                    pgGetFeature4("pgUrlControl")('event_booking', setAttributes, props, 'Booking Link', '', null ),    
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
