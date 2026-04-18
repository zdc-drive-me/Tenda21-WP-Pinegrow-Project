
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
    
    const block = registerBlockType( 'tenda21/footer', {
        apiVersion: 2,
        title: 'Footer',
        description: 'Website footer with contact information, navigation and social links',
        icon: 'block-default',
        category: 'tenda21_blocks',
        keywords: [],
        supports: {},
        attributes: {
            address: {
                type: ['string', 'null'],
                default: `Serra da Estrela<br> 6260 Manteigas<br> Portugal`,
            },
            phone: {
                type: ['string', 'null'],
                default: `T: +351 275 000 000`,
            },
            email: {
                type: ['string', 'null'],
                default: `E: hello@tenda21.com`,
            },
            btn_experiences_link: {
                type: ['object', 'null'],
                default: {post_id: 0, url: 'experiences.html', title: '', 'post_type': null},
            },
            btn_experiences_label: {
                type: ['string', 'null'],
                default: `Experiences`,
            },
            btn_book_link: {
                type: ['object', 'null'],
                default: {post_id: 0, url: 'mailto:hello@tenda21.com?subject=Booking%20Inquiry', title: '', 'post_type': null},
            },
            btn_book_label: {
                type: ['string', 'null'],
                default: `Book Now`,
            },
            btn_support_link: {
                type: ['object', 'null'],
                default: {post_id: 0, url: 'mailto:hello@tenda21.com?subject=Support%20Inquiry', title: '', 'post_type': null},
            },
            btn_support_label: {
                type: ['string', 'null'],
                default: `Support`,
            },
            visit_heading: {
                type: ['string', 'null'],
                default: `Visit Us`,
            },
            social_ig: {
                type: ['object', 'null'],
                default: {post_id: 0, url: '', title: '', 'post_type': null},
            },
            social_fb: {
                type: ['object', 'null'],
                default: {post_id: 0, url: '', title: '', 'post_type': null},
            },
            nif: {
                type: ['string', 'null'],
                default: `PT000000000`,
            }
        },
        example: { attributes: { address: `Serra da Estrela<br> 6260 Manteigas<br> Portugal`, phone: `T: +351 275 000 000`, email: `E: hello@tenda21.com`, btn_experiences_link: {post_id: 0, url: 'experiences.html', title: '', 'post_type': null}, btn_experiences_label: `Experiences`, btn_book_link: {post_id: 0, url: 'mailto:hello@tenda21.com?subject=Booking%20Inquiry', title: '', 'post_type': null}, btn_book_label: `Book Now`, btn_support_link: {post_id: 0, url: 'mailto:hello@tenda21.com?subject=Support%20Inquiry', title: '', 'post_type': null}, btn_support_label: `Support`, visit_heading: `Visit Us`, social_ig: {post_id: 0, url: '#', title: '', 'post_type': null}, social_fb: {post_id: 0, url: '#', title: '', 'post_type': null}, nif: `PT000000000` } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'bg-verde_oliva-500 px-6 py-16 site-footer-nav text-charcoal-900', 'data-block-name': 'site-footer' });
            const setAttributes = props.setAttributes; 
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('footer', { ...blockProps }, [' ', el('div', { className: 'max-w-7xl mx-auto w-full' }, [' ', ' ', el('div', { className: 'grid md:grid-cols-4 gap-12 mb-16' }, [' ', ' ', el('div', { className: 'space-y-4' }, [' ', el('h3', { className: 'font-bold font-serif mb-0 text-2xl text-charcoal-900' }, ' Tenda 21 '), ' ', el(RichText, { tagName: 'address', className: 'font-bold font-sans leading-tight not-italic text-2xl text-charcoal-800', value: propOrDefault( props.attributes.address, 'address' ), onChange: function(val) { setAttributes( {address: val }) } }), ' ', el('div', { className: 'font-sans font-light text-sm text-charcoal-800 space-y-1' }, [' ', el('p', {}, [' ', el(RichText, { tagName: 'a', href: 'tel:+351275000000', value: propOrDefault( props.attributes.phone, 'phone' ), onChange: function(val) { setAttributes( {phone: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', el('p', {}, [' ', el(RichText, { tagName: 'a', href: 'mailto:' + props.attributes.email, value: propOrDefault( props.attributes.email, 'email' ), onChange: function(val) { setAttributes( {email: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']), ' ']), ' ', ' ', el('div', { className: 'flex flex-col items-start space-y-4' }, [' ', el(RichText, { tagName: 'a', href: propOrDefault( props.attributes.btn_experiences_link.url, 'btn_experiences_link', 'url' ), className: '!text-white bg-clay-500 font-normal font-sans inline-block px-4 py-3 text-center text-sm tracking-[0.12em] transition-colors uppercase hover:bg-charcoal-800', onClick: function(e) { e.preventDefault(); }, value: propOrDefault( props.attributes.btn_experiences_label, 'btn_experiences_label' ), onChange: function(val) { setAttributes( {btn_experiences_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'a', href: propOrDefault( props.attributes.btn_book_link.url, 'btn_book_link', 'url' ), className: '!text-white bg-clay-500 font-normal font-sans inline-block px-4 py-3 text-center text-sm tracking-[0.12em] transition-colors uppercase hover:bg-charcoal-800', onClick: function(e) { e.preventDefault(); }, value: propOrDefault( props.attributes.btn_book_label, 'btn_book_label' ), onChange: function(val) { setAttributes( {btn_book_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'a', href: propOrDefault( props.attributes.btn_support_link.url, 'btn_support_link', 'url' ), className: '!text-white bg-clay-500 font-normal font-sans inline-block px-4 py-3 text-center text-sm tracking-[0.12em] transition-colors uppercase hover:bg-charcoal-800', onClick: function(e) { e.preventDefault(); }, value: propOrDefault( props.attributes.btn_support_label, 'btn_support_label' ), onChange: function(val) { setAttributes( {btn_support_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', ' ', el('div', {}, [' ', el('h4', { className: 'font-medium font-sans mb-6 text-charcoal-900 text-sm tracking-[0.12em] uppercase' }, ' Tenda 21 '), ' ', el('nav', { className: 'footer-menu space-y-3' }, [' ', el('a', { href: '#about', className: 'block font-light font-sans text-charcoal-800 text-sm transition-colors hover:text-charcoal-900' }, ' About Us '), ' ', el('a', { href: 'facilitators.html', className: 'block font-sans font-light text-sm text-charcoal-800 hover:text-charcoal-900 transition-colors' }, ' Facilitators '), ' ', el('a', { href: '#volunteering', className: 'block font-sans font-light text-sm text-charcoal-800 hover:text-charcoal-900 transition-colors' }, ' Volunteering '), ' ', el('a', { href: 'mailto:hello@tenda21.com', className: 'block font-sans font-light text-sm text-charcoal-800 hover:text-charcoal-900 transition-colors' }, ' Contact Us '), ' ', el('a', { href: '#guidelines', className: 'block font-sans font-light text-sm text-charcoal-800 hover:text-charcoal-900 transition-colors' }, ' Community Guidelines '), ' ', el('a', { href: '#policy', className: 'block font-sans font-light text-sm text-charcoal-800 hover:text-charcoal-900 transition-colors' }, ' Cancellation Policy '), ' ']), ' ']), ' ', ' ', el('div', {}, [' ', el(RichText, { tagName: 'h4', className: 'font-sans font-medium text-sm uppercase tracking-[0.12em] text-charcoal-900 mb-6', value: propOrDefault( props.attributes.visit_heading, 'visit_heading' ), onChange: function(val) { setAttributes( {visit_heading: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('nav', { className: 'footer-menu space-y-3' }, [' ', el('a', { href: 'experiences.html', className: 'block font-sans font-light text-sm text-charcoal-800 hover:text-charcoal-900 transition-colors' }, ' All Experiences '), ' ', el('a', { href: '#events', className: 'block font-sans font-light text-sm text-charcoal-800 hover:text-charcoal-900 transition-colors' }, ' Upcoming Events '), ' ', el('a', { href: '#retreats', className: 'block font-sans font-light text-sm text-charcoal-800 hover:text-charcoal-900 transition-colors' }, ' Retreats '), ' ', el('a', { href: '#accommodation', className: 'block font-sans font-light text-sm text-charcoal-800 hover:text-charcoal-900 transition-colors' }, ' Accommodation '), ' ']), ' ']), ' ']), ' ', ' ', el('div', { className: 'flex items-center justify-between border-t border-charcoal-400/30 pt-8 mb-8' }, [' ', el('div', { className: 'flex gap-6' }, [' ', props.attributes.social_ig && props.attributes.social_ig.url && el('a', { href: props.attributes.social_ig.url, className: 'font-sans text-sm text-charcoal-800 hover:text-charcoal-900 transition-colors', onClick: function(e) { e.preventDefault(); } }, ' Instagram '), ' ', props.attributes.social_fb && props.attributes.social_fb.url && el('a', { href: props.attributes.social_fb.url, className: 'font-sans text-sm text-charcoal-800 hover:text-charcoal-900 transition-colors', onClick: function(e) { e.preventDefault(); } }, ' Facebook '), ' ']), ' ', el('div', { className: 'flex gap-4' }, [' ', el('a', { href: '#', className: 'font-sans text-sm font-medium text-charcoal-900 underline' }, ' English '), ' ', el('a', { href: '#', className: 'font-sans text-sm text-charcoal-700 hover:text-charcoal-900 transition-colors' }, ' Português '), ' ']), ' ']), ' ', ' ', el('div', { className: 'text-center border-t border-charcoal-400/30 pt-8' }, [' ', el('p', { className: 'font-sans text-xs font-light text-charcoal-700 leading-relaxed' }, [' NIF: ', el(RichText, { tagName: 'span', value: propOrDefault( props.attributes.nif, 'nif' ), onChange: function(val) { setAttributes( {nif: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' — ', el('a', { href: '#privacy', className: 'hover:text-charcoal-900 transition-colors' }, 'Privacy Policy'), ' — ', el('a', { href: '#cookies', className: 'hover:text-charcoal-900 transition-colors' }, 'Cookie Policy'), ' — ', el('a', { href: '#transparency', className: 'hover:text-charcoal-900 transition-colors' }, 'Transparency'), ' — ', el('a', { href: '#policy', className: 'hover:text-charcoal-900 transition-colors' }, 'Cancellation Policy'), ' ']), ' ']), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(BaseControl, {
                                        help: __( '' ),
                                        label: __( 'Address' ),
                                    }, [
                                        el(RichText, {
                                            value: props.attributes.address,
                                            style: {
                                                    border: '1px solid black',
                                                    padding: '6px 8px',
                                                    minHeight: '80px',
                                                    border: '1px solid rgb(117, 117, 117)',
                                                    fontSize: '13px',
                                                    lineHeight: 'normal'
                                                },
                                            onChange: function(val) { setAttributes({address: val}) },
                                        })
                                    ]),
                                    el(TextControl, {
                                        value: props.attributes.phone,
                                        help: __( '' ),
                                        label: __( 'Phone' ),
                                        onChange: function(val) { setAttributes({phone: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.email,
                                        help: __( '' ),
                                        label: __( 'Email' ),
                                        onChange: function(val) { setAttributes({email: val}) },
                                        type: 'text'
                                    }),
                                    pgGetFeature4("pgUrlControl")('btn_experiences_link', setAttributes, props, 'Experiences button link', '', null ),
                                    el(TextControl, {
                                        value: props.attributes.btn_experiences_label,
                                        help: __( '' ),
                                        label: __( 'Experiences button label' ),
                                        onChange: function(val) { setAttributes({btn_experiences_label: val}) },
                                        type: 'text'
                                    }),
                                    pgGetFeature4("pgUrlControl")('btn_book_link', setAttributes, props, 'Book Now button link', '', null ),
                                    el(TextControl, {
                                        value: props.attributes.btn_book_label,
                                        help: __( '' ),
                                        label: __( 'Book Now button label' ),
                                        onChange: function(val) { setAttributes({btn_book_label: val}) },
                                        type: 'text'
                                    }),
                                    pgGetFeature4("pgUrlControl")('btn_support_link', setAttributes, props, 'Support button link', '', null ),
                                    el(TextControl, {
                                        value: props.attributes.btn_support_label,
                                        help: __( '' ),
                                        label: __( 'Support button label' ),
                                        onChange: function(val) { setAttributes({btn_support_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.visit_heading,
                                        help: __( '' ),
                                        label: __( 'Visit Us heading' ),
                                        onChange: function(val) { setAttributes({visit_heading: val}) },
                                        type: 'text'
                                    }),
                                    pgGetFeature4("pgUrlControl")('social_ig', setAttributes, props, 'Instagram', '', null ),
                                    pgGetFeature4("pgUrlControl")('social_fb', setAttributes, props, 'Facebook', '', null ),
                                    el(TextControl, {
                                        value: props.attributes.nif,
                                        help: __( '' ),
                                        label: __( 'NIF number' ),
                                        onChange: function(val) { setAttributes({nif: val}) },
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
