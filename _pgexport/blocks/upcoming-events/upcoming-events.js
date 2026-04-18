
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
    
    const block = registerBlockType( 'tenda21/upcoming-events', {
        apiVersion: 2,
        title: 'Upcoming Events',
        description: 'Upcoming events/sessions for this Experience. Event CPT query loop to be wired in a later pass.',
        icon: 'block-default',
        category: 'tenda21_blocks',
        keywords: [],
        supports: {},
        attributes: {
            event_title: {
                type: ['string', 'null'],
                default: `Weekly Experience Circle`,
            },
            event_description: {
                type: ['string', 'null'],
                default: `Join us every Thursday evening for a guided journey in community.`,
            },
            event_duration: {
                type: ['string', 'null'],
                default: `90 minutes`,
            },
            event_spots: {
                type: ['string', 'null'],
                default: `15 per session`,
            },
            event_date: {
                type: ['string', 'null'],
                default: `TBA`,
            },
            event_cta_url: {
                type: ['object', 'null'],
                default: {post_id: 0, url: 'mailto:hello@tenda21.com', title: '', 'post_type': null},
            },
            event_cta_label: {
                type: ['string', 'null'],
                default: `Book Session`,
            }
        },
        example: { attributes: { event_title: `Weekly Experience Circle`, event_description: `Join us every Thursday evening for a guided journey in community.`, event_duration: `90 minutes`, event_spots: `15 per session`, event_date: `TBA`, event_cta_url: {post_id: 0, url: 'mailto:hello@tenda21.com', title: '', 'post_type': null}, event_cta_label: `Book Session` } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'py-24 px-6 bg-bone-200', 'data-block-name': 'upcoming-events' });
            const setAttributes = props.setAttributes; 
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-5xl mx-auto w-full' }, [' ', el('h2', { className: 'font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-charcoal-600 text-center mb-16' }, 'Upcoming Sessions'), ' ', el('div', { className: 'space-y-6' }, [' ', el('article', { className: 'bg-bone-100 p-8 border-l-2 border-forest-700' }, [' ', el('div', { className: 'grid md:grid-cols-3 gap-8 items-start' }, [' ', el('div', { className: 'md:col-span-2 space-y-3' }, [' ', el(RichText, { tagName: 'h3', className: 'font-serif font-light text-2xl leading-[1.3] text-charcoal-900', value: propOrDefault( props.attributes.event_title, 'event_title' ), onChange: function(val) { setAttributes( {event_title: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-base leading-[1.8] text-charcoal-700', value: propOrDefault( props.attributes.event_description, 'event_description' ), onChange: function(val) { setAttributes( {event_description: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('div', { className: 'flex gap-8 text-sm' }, [' ', el('div', {}, [' ', el('span', { className: 'font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1' }, 'Duration'), ' ', el(RichText, { tagName: 'span', className: 'font-sans text-charcoal-800', value: propOrDefault( props.attributes.event_duration, 'event_duration' ), onChange: function(val) { setAttributes( {event_duration: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', el('div', {}, [' ', el('span', { className: 'font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1' }, 'Spots'), ' ', el(RichText, { tagName: 'span', className: 'font-sans text-charcoal-800', value: propOrDefault( props.attributes.event_spots, 'event_spots' ), onChange: function(val) { setAttributes( {event_spots: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']), ' ']), ' ', el('div', { className: 'space-y-4' }, [' ', el('div', {}, [' ', el('span', { className: 'font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-2' }, 'Date'), ' ', el(RichText, { tagName: 'span', className: 'font-sans text-sm text-charcoal-800', value: propOrDefault( props.attributes.event_date, 'event_date' ), onChange: function(val) { setAttributes( {event_date: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', el(RichText, { tagName: 'a', href: propOrDefault( props.attributes.event_cta_url.url, 'event_cta_url', 'url' ), className: 'inline-block bg-clay-500 text-bone-50 font-sans font-medium text-xs uppercase tracking-[0.12em] px-8 py-3 transition-all duration-300 hover:bg-clay-600', onClick: function(e) { e.preventDefault(); }, value: propOrDefault( props.attributes.event_cta_label, 'event_cta_label' ), onChange: function(val) { setAttributes( {event_cta_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']), ' ']), ' ']), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.event_title,
                                        help: __( '' ),
                                        label: __( 'Event Title' ),
                                        onChange: function(val) { setAttributes({event_title: val}) },
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
                                        value: props.attributes.event_duration,
                                        help: __( '' ),
                                        label: __( 'Event Duration' ),
                                        onChange: function(val) { setAttributes({event_duration: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.event_spots,
                                        help: __( '' ),
                                        label: __( 'Spots' ),
                                        onChange: function(val) { setAttributes({event_spots: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.event_date,
                                        help: __( '' ),
                                        label: __( 'Event Date' ),
                                        onChange: function(val) { setAttributes({event_date: val}) },
                                        type: 'text'
                                    }),
                                    pgGetFeature4("pgUrlControl")('event_cta_url', setAttributes, props, 'Booking URL', '', null ),
                                    el(TextControl, {
                                        value: props.attributes.event_cta_label,
                                        help: __( '' ),
                                        label: __( 'Booking Label' ),
                                        onChange: function(val) { setAttributes({event_cta_label: val}) },
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
