
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
    
    const block = registerBlockType( 'tenda21/experience-upcoming-events', {
        apiVersion: 2,
        title: 'Experience Upcoming Events',
        description: 'Upcoming Events for the current Experience page. Loop id: upcoming-events. Requires pg_query_args filter in custom.php.',
        icon: 'block-default',
        category: 'tenda21_experience',
        keywords: [],
        supports: {},
        attributes: {
            title: {
                type: ['string', 'null'],
                default: `Event Title`,
            },
            post_excerpt: {
                type: ['string', 'null'],
                default: `Short event excerpt.`,
            },
            event_start_time: {
                type: ['string', 'null'],
                default: `00:00`,
            },
            event_price: {
                type: ['string', 'null'],
                default: `€ —`,
            },
            event_start_date: {
                type: ['string', 'null'],
                default: `TBA`,
            },
            event_booking_status: {
                type: ['string', 'null'],
                default: `Open`,
            },
            event_booking: {
                type: ['object', 'null'],
                default: {post_id: 0, url: '#', title: '', 'post_type': null},
            }
        },
        example: { attributes: { title: `Event Title`, post_excerpt: `Short event excerpt.`, event_start_time: `00:00`, event_price: `€ —`, event_start_date: `TBA`, event_booking_status: `Open`, event_booking: {post_id: 0, url: '#', title: '', 'post_type': null} } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'py-24 px-6 bg-bone-200' });
            const setAttributes = props.setAttributes; 
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-5xl mx-auto w-full' }, [' ', el('h2', { className: 'font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-charcoal-600 text-center mb-16' }, 'Upcoming Sessions'), ' ', el('div', { className: 'space-y-6' }, [' ', ' ', el('article', { className: 'bg-bone-100 p-8 border-l-2 border-forest-700' }, [' ', el('div', { className: 'grid md:grid-cols-3 gap-8 items-start' }, [' ', el('div', { className: 'md:col-span-2 space-y-3' }, [' ', el(RichText, { tagName: 'h3', className: 'font-serif font-light text-2xl leading-[1.3] text-charcoal-900', value: propOrDefault( props.attributes.title, 'title' ), onChange: function(val) { setAttributes( {title: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-base leading-[1.8] text-charcoal-700', value: propOrDefault( props.attributes.post_excerpt, 'post_excerpt' ), onChange: function(val) { setAttributes( {post_excerpt: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('div', { className: 'flex gap-8 text-sm' }, [' ', el('div', {}, [' ', el('span', { className: 'font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1' }, 'Start Time'), ' ', el(RichText, { tagName: 'span', className: 'font-sans text-charcoal-800', value: propOrDefault( props.attributes.event_start_time, 'event_start_time' ), onChange: function(val) { setAttributes( {event_start_time: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', el('div', {}, [' ', el('span', { className: 'font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1' }, 'Price'), ' ', el(RichText, { tagName: 'span', className: 'font-sans text-charcoal-800', value: propOrDefault( props.attributes.event_price, 'event_price' ), onChange: function(val) { setAttributes( {event_price: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']), ' ']), ' ', el('div', { className: 'space-y-4' }, [' ', el('div', {}, [' ', el('span', { className: 'font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-2' }, 'Start Date'), ' ', el(RichText, { tagName: 'span', className: 'font-sans text-sm text-charcoal-800', value: propOrDefault( props.attributes.event_start_date, 'event_start_date' ), onChange: function(val) { setAttributes( {event_start_date: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', el('div', {}, [' ', el('span', { className: 'font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1' }, 'Booking Status'), ' ', el(RichText, { tagName: 'span', className: 'font-sans text-sm text-charcoal-800', value: propOrDefault( props.attributes.event_booking_status, 'event_booking_status' ), onChange: function(val) { setAttributes( {event_booking_status: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', el('a', { href: propOrDefault( props.attributes.event_booking.url, 'event_booking', 'url' ), className: 'inline-block bg-clay-500 text-bone-50 font-sans font-medium text-xs uppercase tracking-[0.12em] px-8 py-3 transition-all duration-300 hover:bg-clay-600', onClick: function(e) { e.preventDefault(); } }, 'Book Now'), ' ']), ' ']), ' ']), ' ']), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.title,
                                        help: __( '' ),
                                        label: __( 'Event Title' ),
                                        onChange: function(val) { setAttributes({title: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.post_excerpt,
                                        help: __( '' ),
                                        label: __( 'Event Excerpt' ),
                                        onChange: function(val) { setAttributes({post_excerpt: val}) },
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
                                        value: props.attributes.event_price,
                                        help: __( '' ),
                                        label: __( 'Price' ),
                                        onChange: function(val) { setAttributes({event_price: val}) },
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
