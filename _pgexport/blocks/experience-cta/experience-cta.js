
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
    
    const block = registerBlockType( 'tenda21/experience-cta', {
        apiVersion: 2,
        title: 'Experience CTA',
        description: 'Booking call-to-action for a single Experience page. Supports custom booking note, CTA label, and CTA URL.',
        icon: 'block-default',
        category: 'tenda21_experience',
        keywords: [],
        supports: {},
        attributes: {
            experience_booking_note: {
                type: ['string', 'null'],
                default: `Booking note or availability message.`,
            },
            experience_cta_url: {
                type: ['object', 'null'],
                default: {post_id: 0, url: 'mailto:hello@tenda21.com', title: '', 'post_type': null},
            },
            experience_cta_label: {
                type: ['string', 'null'],
                default: `Reserve Your Place`,
            }
        },
        example: { attributes: { experience_booking_note: `Booking note or availability message.`, experience_cta_url: {post_id: 0, url: 'mailto:hello@tenda21.com', title: '', 'post_type': null}, experience_cta_label: `Reserve Your Place` } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'py-24 px-6 bg-bone-100' });
            const setAttributes = props.setAttributes; 
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-3xl mx-auto text-center w-full space-y-8' }, [' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-base leading-[1.8] text-charcoal-600 max-w-[60ch] mx-auto', value: propOrDefault( props.attributes.experience_booking_note, 'experience_booking_note' ), onChange: function(val) { setAttributes( {experience_booking_note: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'a', href: propOrDefault( props.attributes.experience_cta_url.url, 'experience_cta_url', 'url' ), className: 'inline-block bg-clay-500 text-bone-50 font-sans font-medium text-sm uppercase tracking-[0.12em] px-12 py-5 transition-all duration-300 hover:bg-clay-600 hover:[transform:translateY(-2px)] hover:shadow-[0_8px_24px_rgba(0,0,0,0.12)]', onClick: function(e) { e.preventDefault(); }, value: propOrDefault( props.attributes.experience_cta_label, 'experience_cta_label' ), onChange: function(val) { setAttributes( {experience_cta_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.experience_booking_note,
                                        help: __( '' ),
                                        label: __( 'Booking Note' ),
                                        onChange: function(val) { setAttributes({experience_booking_note: val}) },
                                        type: 'text'
                                    }),
                                    pgGetFeature4("pgUrlControl")('experience_cta_url', setAttributes, props, 'CTA URL', '', null ),
                                    el(TextControl, {
                                        value: props.attributes.experience_cta_label,
                                        help: __( '' ),
                                        label: __( 'CTA Label' ),
                                        onChange: function(val) { setAttributes({experience_cta_label: val}) },
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
