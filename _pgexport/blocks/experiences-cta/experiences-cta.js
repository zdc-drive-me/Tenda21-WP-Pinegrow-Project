
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
    
    const block = registerBlockType( 'tenda21/experiences-cta', {
        apiVersion: 2,
        title: 'Experiences CTA',
        description: 'Custom inquiry call-to-action for the Experiences archive page. Supports editable heading, body copy, button label, and button URL.',
        icon: 'block-default',
        category: 'tenda21_experience',
        keywords: [],
        supports: {},
        attributes: {
            experiences_cta_heading: {
                type: ['string', 'null'],
                default: `Not sure which experience is right for you?`,
            },
            experiences_cta_body: {
                type: ['string', 'null'],
                default: `We also offer custom immersions for groups and individuals with specific intentions. Reach out and let's create something together.`,
            },
            experiences_cta_url: {
                type: ['object', 'null'],
                default: {post_id: 0, url: 'mailto:hello@tenda21.com?subject=Custom%20Experience%20Inquiry', title: '', 'post_type': null},
            },
            experiences_cta_label: {
                type: ['string', 'null'],
                default: `Inquire About Custom Retreats`,
            }
        },
        example: { attributes: { experiences_cta_heading: `Not sure which experience is right for you?`, experiences_cta_body: `We also offer custom immersions for groups and individuals with specific intentions. Reach out and let's create something together.`, experiences_cta_url: {post_id: 0, url: 'mailto:hello@tenda21.com?subject=Custom%20Experience%20Inquiry', title: '', 'post_type': null}, experiences_cta_label: `Inquire About Custom Retreats` } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'py-32 px-6 bg-bone-100' });
            const setAttributes = props.setAttributes; 
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-3xl mx-auto text-center w-full' }, [' ', el(RichText, { tagName: 'h2', className: 'font-serif font-light text-[clamp(1.75rem,4vw,3rem)] leading-[1.4] text-charcoal-800 mb-8', value: propOrDefault( props.attributes.experiences_cta_heading, 'experiences_cta_heading' ), onChange: function(val) { setAttributes( {experiences_cta_heading: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-lg leading-[1.8] text-charcoal-700 mb-12 max-w-[65ch] mx-auto', value: propOrDefault( props.attributes.experiences_cta_body, 'experiences_cta_body' ), onChange: function(val) { setAttributes( {experiences_cta_body: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'a', href: propOrDefault( props.attributes.experiences_cta_url.url, 'experiences_cta_url', 'url' ), className: 'bg-clay-500 duration-300 font-normal font-sans inline-block px-12 py-5 text-bone-50 text-sm tracking-[0.12em] transition-all uppercase hover:bg-clay-600 hover:[transform:translateY(-2px)] hover:shadow-[0_8px_24px_rgba(0,0,0,0.12)]', onClick: function(e) { e.preventDefault(); }, value: propOrDefault( props.attributes.experiences_cta_label, 'experiences_cta_label' ), onChange: function(val) { setAttributes( {experiences_cta_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.experiences_cta_heading,
                                        help: __( '' ),
                                        label: __( 'Heading' ),
                                        onChange: function(val) { setAttributes({experiences_cta_heading: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.experiences_cta_body,
                                        help: __( '' ),
                                        label: __( 'Body Copy' ),
                                        onChange: function(val) { setAttributes({experiences_cta_body: val}) },
                                        type: 'text'
                                    }),
                                    pgGetFeature4("pgUrlControl")('experiences_cta_url', setAttributes, props, 'CTA URL', '', null ),
                                    el(TextControl, {
                                        value: props.attributes.experiences_cta_label,
                                        help: __( '' ),
                                        label: __( 'CTA Label' ),
                                        onChange: function(val) { setAttributes({experiences_cta_label: val}) },
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
