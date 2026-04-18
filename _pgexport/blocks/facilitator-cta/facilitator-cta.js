
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
    
    const block = registerBlockType( 'tenda21/facilitator-cta', {
        apiVersion: 2,
        title: 'Facilitator CTA',
        description: 'Call-to-action section for the Facilitators page. Invites practitioners to get in touch via email.',
        icon: 'block-default',
        category: 'tenda21_facilitator',
        keywords: [],
        supports: {},
        attributes: {
            facilitator_cta_heading: {
                type: ['string', 'null'],
                default: `Are you a facilitator?`,
            },
            facilitator_cta_body: {
                type: ['string', 'null'],
                default: `We're always open to collaborating with practitioners who share our values of presence, integrity, and deep respect for the process of transformation.`,
            },
            facilitator_cta_link: {
                type: ['object', 'null'],
                default: {post_id: 0, url: 'mailto:hello@tenda21.com?subject=Facilitator%20Collaboration', title: '', 'post_type': null},
            }
        },
        example: { attributes: { facilitator_cta_heading: `Are you a facilitator?`, facilitator_cta_body: `We're always open to collaborating with practitioners who share our values of presence, integrity, and deep respect for the process of transformation.`, facilitator_cta_link: {post_id: 0, url: 'mailto:hello@tenda21.com?subject=Facilitator%20Collaboration', title: '', 'post_type': null} } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'py-32 px-6 bg-bone-100' });
            const setAttributes = props.setAttributes; 
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-3xl mx-auto text-center w-full' }, [' ', el(RichText, { tagName: 'h2', className: 'font-serif font-light text-[clamp(1.75rem,4vw,3rem)] leading-[1.4] text-charcoal-800 mb-8', value: propOrDefault( props.attributes.facilitator_cta_heading, 'facilitator_cta_heading' ), onChange: function(val) { setAttributes( {facilitator_cta_heading: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-lg leading-[1.8] text-charcoal-700 mb-12 max-w-[65ch] mx-auto', value: propOrDefault( props.attributes.facilitator_cta_body, 'facilitator_cta_body' ), onChange: function(val) { setAttributes( {facilitator_cta_body: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('a', { href: propOrDefault( props.attributes.facilitator_cta_link.url, 'facilitator_cta_link', 'url' ), className: 'bg-clay-500 duration-300 font-normal font-sans inline-block px-12 py-5 text-bone-50 text-sm tracking-[0.12em] transition-all uppercase hover:bg-clay-600 hover:[transform:translateY(-2px)] hover:shadow-[0_8px_24px_rgba(0,0,0,0.12)]', onClick: function(e) { e.preventDefault(); } }, ' Get in Touch '), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.facilitator_cta_heading,
                                        help: __( '' ),
                                        label: __( 'Heading' ),
                                        onChange: function(val) { setAttributes({facilitator_cta_heading: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.facilitator_cta_body,
                                        help: __( '' ),
                                        label: __( 'Body Text' ),
                                        onChange: function(val) { setAttributes({facilitator_cta_body: val}) },
                                        type: 'text'
                                    }),
                                    pgGetFeature4("pgUrlControl")('facilitator_cta_link', setAttributes, props, 'CTA Link', '', null ),    
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
