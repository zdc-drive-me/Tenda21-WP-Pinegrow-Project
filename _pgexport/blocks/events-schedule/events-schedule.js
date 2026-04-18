
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
    
    const block = registerBlockType( 'tenda21/events-schedule', {
        apiVersion: 2,
        title: 'Events Schedule',
        description: 'Events listing section with schedule header and event cards',
        icon: 'block-default',
        category: 'tenda21_blocks',
        keywords: [],
        supports: {},
        attributes: {
            schedule_label: {
                type: ['string', 'null'],
                default: `Upcoming Schedule`,
            },
            schedule_meta: {
                type: ['string', 'null'],
                default: `All times · Serra da Estrela, Portugal · GMT+1`,
            },
            feature_image: {
                type: ['object', 'null'],
                default: {id: 0, url: 'https://images.unsplash.com/photo-1476611317561-60117649dd94?w=800&h=700&fit=crop&crop=center', size: '', svg: '', alt: 'Fire circle gathering'},
            },
            image_caption: {
                type: ['string', 'null'],
                default: `Tenda 21 · May`,
            },
            event_title: {
                type: ['string', 'null'],
                default: `Fire Circle Gathering`,
            },
            event_type: {
                type: ['string', 'null'],
                default: `Remote`,
            },
            date_start: {
                type: ['string', 'null'],
                default: `03 May 2026 · 18:00`,
            },
            date_end: {
                type: ['string', 'null'],
                default: `03 May 2026 · 22:00`,
            },
            event_description: {
                type: ['string', 'null'],
                default: `Voices weave across continents for an evening of song, prayer, and story held around the hearth at Tenda 21.`,
            },
            location: {
                type: ['string', 'null'],
                default: `Zoom · Link shared after booking`,
            },
            atmosphere: {
                type: ['string', 'null'],
                default: `Sliding scale · €45–€75`,
            },
            price_label: {
                type: ['string', 'null'],
                default: `Contribution`,
            },
            price: {
                type: ['string', 'null'],
                default: `€65`,
            },
            booking_status: {
                type: ['string', 'null'],
                default: `Open seats`,
            },
            cta_url: {
                type: ['string', 'null'],
                default: '',
            },
            cta_text: {
                type: ['string', 'null'],
                default: `RSVP`,
            }
        },
        example: { attributes: { schedule_label: `Upcoming Schedule`, schedule_meta: `All times · Serra da Estrela, Portugal · GMT+1`, feature_image: {id: 0, url: 'https://images.unsplash.com/photo-1476611317561-60117649dd94?w=800&h=700&fit=crop&crop=center', size: '', svg: '', alt: 'Fire circle gathering'}, image_caption: `Tenda 21 · May`, event_title: `Fire Circle Gathering`, event_type: `Remote`, date_start: `03 May 2026 · 18:00`, date_end: `03 May 2026 · 22:00`, event_description: `Voices weave across continents for an evening of song, prayer, and story held around the hearth at Tenda 21.`, location: `Zoom · Link shared after booking`, atmosphere: `Sliding scale · €45–€75`, price_label: `Contribution`, price: `€65`, booking_status: `Open seats`, cta_url: '', cta_text: `RSVP` } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'schedule-section' });
            const setAttributes = props.setAttributes; 
            
            props.feature_image = useSelect(function( select ) {
                return {
                    feature_image: props.attributes.feature_image.id ? select('core').getMedia(props.attributes.feature_image.id) : undefined
                };
            }, [props.attributes.feature_image] ).feature_image;
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'schedule-header' }, [' ', el(RichText, { tagName: 'span', value: propOrDefault( props.attributes.schedule_label, 'schedule_label' ), onChange: function(val) { setAttributes( {schedule_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('div', { className: 'dots' }, [' ', el('span', {}), ' ', el('span', {}), ' ', el('span', {}), ' ']), ' ', el(RichText, { tagName: 'span', value: propOrDefault( props.attributes.schedule_meta, 'schedule_meta' ), onChange: function(val) { setAttributes( {schedule_meta: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', el('div', { className: 'events-list' }, [' ', ' ', ' ', ' ', el('article', { className: 'event-card' }, [' ', el('div', { className: 'event-feature-image' }, [' ', props.attributes.feature_image && props.attributes.feature_image.svg && pgGetFeature4("pgCreateSVG")(RawHTML, {}, pgGetFeature4("pgMergeInlineSVGAttributes")(propOrDefault( props.attributes.feature_image.svg, 'feature_image', 'svg' ), {})), props.attributes.feature_image && !props.attributes.feature_image.svg && propOrDefault( props.attributes.feature_image.url, 'feature_image', 'url' ) && el('img', { src: propOrDefault( props.attributes.feature_image.url, 'feature_image', 'url' ), alt: propOrDefault( props.attributes.feature_image?.alt, 'feature_image', 'alt' ), className: (props.attributes.feature_image.id ? ('wp-image-' + props.attributes.feature_image.id) : '') }), ' ', el(RichText, { tagName: 'span', className: 'event-feature-caption', value: propOrDefault( props.attributes.image_caption, 'image_caption' ), onChange: function(val) { setAttributes( {image_caption: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', el('div', { className: 'event-body' }, [' ', el('div', { className: 'event-title-row' }, [' ', el(RichText, { tagName: 'a', href: 'experience-circle.html', className: 'event-title', value: propOrDefault( props.attributes.event_title, 'event_title' ), onChange: function(val) { setAttributes( {event_title: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'span', className: 'event-type-badge', value: propOrDefault( props.attributes.event_type, 'event_type' ), onChange: function(val) { setAttributes( {event_type: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', el('div', { className: 'event-date-inline' }, [' ', el(RichText, { tagName: 'time', value: propOrDefault( props.attributes.date_start, 'date_start' ), onChange: function(val) { setAttributes( {date_start: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('span', { className: 'date-sep' }, '—'), ' ', el(RichText, { tagName: 'time', value: propOrDefault( props.attributes.date_end, 'date_end' ), onChange: function(val) { setAttributes( {date_end: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('span', { className: 'date-tz' }, 'Streaming · GMT+1'), ' ']), ' ', el('div', { className: 'event-facilitators' }, [' ', el('span', { className: 'facilitators-label' }, 'Guided by'), ' ', el('a', { href: 'facilitator-ana-silva.html', className: 'facilitator-tag' }, 'Ana Silva'), ' ']), ' ', el(RichText, { tagName: 'p', className: 'event-desc', value: propOrDefault( props.attributes.event_description, 'event_description' ), onChange: function(val) { setAttributes( {event_description: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('div', { className: 'event-meta-row' }, [' ', el('div', {}, [' ', el('span', { className: 'meta-item-label' }, 'Location'), ' ', el(RichText, { tagName: 'span', className: 'meta-item-value', value: propOrDefault( props.attributes.location, 'location' ), onChange: function(val) { setAttributes( {location: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', el('div', {}, [' ', el('span', { className: 'meta-item-label' }, 'Price Tier'), ' ', el(RichText, { tagName: 'span', className: 'meta-item-value', value: propOrDefault( props.attributes.atmosphere, 'atmosphere' ), onChange: function(val) { setAttributes( {atmosphere: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']), ' ']), ' ', el('div', { className: 'event-booking' }, [' ', el('div', {}, [' ', el(RichText, { tagName: 'span', className: 'booking-label', value: propOrDefault( props.attributes.price_label, 'price_label' ), onChange: function(val) { setAttributes( {price_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'booking-price', value: propOrDefault( props.attributes.price, 'price' ), onChange: function(val) { setAttributes( {price: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'span', className: 'booking-status', value: propOrDefault( props.attributes.booking_status, 'booking_status' ), onChange: function(val) { setAttributes( {booking_status: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', el('a', { href: 'mailto:hello@tenda21.com?subject=Fire%20Circle', className: 'booking-cta secondary' }, [' ', el(RichText, { tagName: 'span', value: propOrDefault( props.attributes.cta_text, 'cta_text' ), onChange: function(val) { setAttributes( {cta_text: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('span', { className: 'cta-arrow' }, '→'), ' ']), ' ']), ' ']), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                        pgGetFeature4("pgMediaImageControl")('feature_image', setAttributes, props, 'full', true, 'Feature Image', '' ),
                                        
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.schedule_label,
                                        help: __( '' ),
                                        label: __( 'Schedule Label' ),
                                        onChange: function(val) { setAttributes({schedule_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.schedule_meta,
                                        help: __( '' ),
                                        label: __( 'Location & Timezone' ),
                                        onChange: function(val) { setAttributes({schedule_meta: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.image_caption,
                                        help: __( '' ),
                                        label: __( 'Image Caption' ),
                                        onChange: function(val) { setAttributes({image_caption: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.event_title,
                                        help: __( '' ),
                                        label: __( 'Event Title' ),
                                        onChange: function(val) { setAttributes({event_title: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.event_type,
                                        help: __( '' ),
                                        label: __( 'Event Type (e.g. On-site / Remote)' ),
                                        onChange: function(val) { setAttributes({event_type: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.date_start,
                                        help: __( '' ),
                                        label: __( 'Start Date & Time' ),
                                        onChange: function(val) { setAttributes({date_start: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.date_end,
                                        help: __( '' ),
                                        label: __( 'End Date & Time' ),
                                        onChange: function(val) { setAttributes({date_end: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.event_description,
                                        help: __( '' ),
                                        label: __( 'Event Description' ),
                                        onChange: function(val) { setAttributes({event_description: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.location,
                                        help: __( '' ),
                                        label: __( 'Location' ),
                                        onChange: function(val) { setAttributes({location: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.atmosphere,
                                        help: __( '' ),
                                        label: __( 'Secondary Meta' ),
                                        onChange: function(val) { setAttributes({atmosphere: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.price_label,
                                        help: __( '' ),
                                        label: __( 'Price Label (e.g. Investment / Contribution)' ),
                                        onChange: function(val) { setAttributes({price_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.price,
                                        help: __( '' ),
                                        label: __( 'Price' ),
                                        onChange: function(val) { setAttributes({price: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.booking_status,
                                        help: __( '' ),
                                        label: __( 'Booking Status' ),
                                        onChange: function(val) { setAttributes({booking_status: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.cta_url,
                                        help: __( '' ),
                                        label: __( 'Booking URL' ),
                                        onChange: function(val) { setAttributes({cta_url: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.cta_text,
                                        help: __( '' ),
                                        label: __( 'CTA Button Text' ),
                                        onChange: function(val) { setAttributes({cta_text: val}) },
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
