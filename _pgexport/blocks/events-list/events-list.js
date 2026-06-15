
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
    
    const block = registerBlockType( 'tenda21/events-list', {
        apiVersion: 2,
        title: 'Events List',
        description: 'Archive wrapper for the Events CPT loop. Provides schedule header and loop container. Loop id: events-schedule.',
        icon: 'block-default',
        category: 'tenda21_event',
        keywords: [],
        supports: {},
        attributes: {
            events_schedule_label: {
                type: ['string', 'null'],
                default: `Upcoming Schedule`,
            },
            events_timezone_label: {
                type: ['string', 'null'],
                default: `All times · Serra da Estrela, Portugal · GMT+1`,
            }
        },
        example: { attributes: { events_schedule_label: `Upcoming Schedule`, events_timezone_label: `All times · Serra da Estrela, Portugal · GMT+1` } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'py-16 md:py-24 px-6 bg-bone-100 border-t border-b border-mist-300' });
            const setAttributes = props.setAttributes; 
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-6xl mx-auto w-full' }, [' ', el('div', { className: 'flex flex-col gap-2 md:flex-row md:items-center md:justify-between border-b border-mist-400 pb-4 mb-10 text-xs font-sans uppercase tracking-[0.2em] text-charcoal-500' }, [' ', el(RichText, { tagName: 'span', value: propOrDefault( props.attributes.events_schedule_label, 'events_schedule_label' ), onChange: function(val) { setAttributes( {events_schedule_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'span', value: propOrDefault( props.attributes.events_timezone_label, 'events_timezone_label' ), onChange: function(val) { setAttributes( {events_timezone_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', el('div', { className: 'space-y-6' }, [' ', ' ', el('div', { className: 'rounded border border-dashed border-mist-400/70 bg-bone-50/70 px-6 py-8 text-center font-sans text-sm text-charcoal-500/80' }, [' Add the ', el('strong', {}, 'Event Row'), ' block inside the Events List loop.', ' ']), ' ']), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.events_schedule_label,
                                        help: __( '' ),
                                        label: __( 'Schedule Label' ),
                                        onChange: function(val) { setAttributes({events_schedule_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.events_timezone_label,
                                        help: __( '' ),
                                        label: __( 'Timezone Label' ),
                                        onChange: function(val) { setAttributes({events_timezone_label: val}) },
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
