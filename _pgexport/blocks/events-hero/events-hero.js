
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
    
    const block = registerBlockType( 'tenda21/events-hero', {
        apiVersion: 2,
        title: 'Events Hero',
        description: 'Intro hero for the Events archive page with eyebrow label, title, and intro paragraph.',
        icon: 'block-default',
        category: 'tenda21_event',
        keywords: [],
        supports: {},
        attributes: {
            events_eyebrow: {
                type: ['string', 'null'],
                default: `Monthly Agenda · 2026`,
            },
            events_title: {
                type: ['string', 'null'],
                default: `Events &amp;<br><em class="italic text-clay-500">Immersions</em>`,
            },
            events_intro: {
                type: ['string', 'null'],
                default: `An editorial view of upcoming circles, retreats, and seasonal gatherings at Tenda 21. Each line tells you who is guiding, when it unfolds, and how to reserve your place.`,
            },
            events_scroll_label: {
                type: ['string', 'null'],
                default: `Scroll`,
            }
        },
        example: { attributes: { events_eyebrow: `Monthly Agenda · 2026`, events_title: `Events &amp;<br><em class="italic text-clay-500">Immersions</em>`, events_intro: `An editorial view of upcoming circles, retreats, and seasonal gatherings at Tenda 21. Each line tells you who is guiding, when it unfolds, and how to reserve your place.`, events_scroll_label: `Scroll` } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'relative bg-bone-200 min-h-[65vh] flex flex-col items-center justify-center pt-32 pb-24 px-6 md:px-16 overflow-hidden text-center' });
            const setAttributes = props.setAttributes; 
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'absolute top-0 left-0 right-0 h-[3px] bg-gradient-to-r from-transparent via-clay-400 to-transparent' }), ' ', el('div', { className: 'relative z-10 max-w-5xl mx-auto w-full flex flex-col items-center' }, [' ', el('div', { className: 'flex items-center gap-5 mb-10' }, [' ', el('span', { className: 'block w-12 h-px bg-clay-400 shrink-0' }), ' ', el(RichText, { tagName: 'p', className: 'font-sans uppercase text-[0.6rem] tracking-[0.3em] font-medium text-forest-700 whitespace-nowrap', value: propOrDefault( props.attributes.events_eyebrow, 'events_eyebrow' ), onChange: function(val) { setAttributes( {events_eyebrow: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('span', { className: 'block w-12 h-px bg-clay-400 shrink-0' }), ' ']), ' ', el(RichText, { tagName: 'h1', className: 'font-serif font-light text-[clamp(3.8rem,8vw,7.5rem)] leading-[1.0] tracking-[-0.01em] text-charcoal-900 mb-10', value: propOrDefault( props.attributes.events_title, 'events_title' ), onChange: function(val) { setAttributes( {events_title: val }) } }), ' ', el('div', { className: 'w-px h-10 bg-mist-400 mb-10' }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-base md:text-lg leading-[1.9] text-charcoal-700 max-w-[52ch] mx-auto', value: propOrDefault( props.attributes.events_intro, 'events_intro' ), onChange: function(val) { setAttributes( {events_intro: val }) } }), ' ']), ' ', el('div', { className: 'absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 opacity-50' }, [' ', el(RichText, { tagName: 'span', className: 'font-sans uppercase text-[0.5rem] tracking-[0.28em] text-charcoal-500', value: propOrDefault( props.attributes.events_scroll_label, 'events_scroll_label' ), onChange: function(val) { setAttributes( {events_scroll_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('div', { className: 'w-px h-8 bg-mist-500' }), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.events_eyebrow,
                                        help: __( '' ),
                                        label: __( 'Eyebrow Label' ),
                                        onChange: function(val) { setAttributes({events_eyebrow: val}) },
                                        type: 'text'
                                    }),
                                    el(BaseControl, {
                                        help: __( '' ),
                                        label: __( 'Hero Title' ),
                                    }, [
                                        el(RichText, {
                                            value: props.attributes.events_title,
                                            style: {
                                                    border: '1px solid black',
                                                    padding: '6px 8px',
                                                    minHeight: '80px',
                                                    border: '1px solid rgb(117, 117, 117)',
                                                    fontSize: '13px',
                                                    lineHeight: 'normal'
                                                },
                                            onChange: function(val) { setAttributes({events_title: val}) },
                                        })
                                    ]),
                                    el(BaseControl, {
                                        help: __( '' ),
                                        label: __( 'Intro Paragraph' ),
                                    }, [
                                        el(RichText, {
                                            value: props.attributes.events_intro,
                                            style: {
                                                    border: '1px solid black',
                                                    padding: '6px 8px',
                                                    minHeight: '80px',
                                                    border: '1px solid rgb(117, 117, 117)',
                                                    fontSize: '13px',
                                                    lineHeight: 'normal'
                                                },
                                            onChange: function(val) { setAttributes({events_intro: val}) },
                                        })
                                    ]),
                                    el(TextControl, {
                                        value: props.attributes.events_scroll_label,
                                        help: __( '' ),
                                        label: __( 'Scroll Label' ),
                                        onChange: function(val) { setAttributes({events_scroll_label: val}) },
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
