
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
    
    const block = registerBlockType( 'tenda21/facilitator-meta', {
        apiVersion: 2,
        title: 'Facilitator Meta',
        description: 'Meta row for a Facilitator page. Shows languages, website, and Instagram links.',
        icon: 'block-default',
        category: 'tenda21_facilitator',
        keywords: [],
        supports: {},
        attributes: {
            languages_label: {
                type: ['string', 'null'],
                default: `Languages`,
            },
            website_label: {
                type: ['string', 'null'],
                default: `Website`,
            },
            instagram_label: {
                type: ['string', 'null'],
                default: `Instagram`,
            }
        },
        example: { attributes: { languages_label: `Languages`, website_label: `Website`, instagram_label: `Instagram` } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'py-12 px-6 bg-bone-100 border-t border-mist-400' });
            const setAttributes = props.setAttributes; 
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-6xl mx-auto w-full' }, [' ', el('div', { className: 'flex flex-wrap gap-x-12 gap-y-6 items-start' }, [' ', el('div', {}, [' ', el(RichText, { tagName: 'span', className: 'font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1', value: propOrDefault( props.attributes.languages_label, 'languages_label' ), onChange: function(val) { setAttributes( {languages_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('span', { className: 'font-sans text-sm text-charcoal-800' }, 'Portuguese, English'), ' ']), ' ', el('div', {}, [' ', el(RichText, { tagName: 'span', className: 'font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1', value: propOrDefault( props.attributes.website_label, 'website_label' ), onChange: function(val) { setAttributes( {website_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('a', { href: '#', className: 'font-sans text-sm text-forest-700 hover:text-forest-800 transition-colors' }, 'website.com'), ' ']), ' ', el('div', {}, [' ', el(RichText, { tagName: 'span', className: 'font-sans uppercase text-[0.6rem] tracking-[0.12em] font-medium text-charcoal-600 block mb-1', value: propOrDefault( props.attributes.instagram_label, 'instagram_label' ), onChange: function(val) { setAttributes( {instagram_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('a', { href: '#', className: 'font-sans text-sm text-forest-700 hover:text-forest-800 transition-colors' }, '@handle'), ' ']), ' ']), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.languages_label,
                                        help: __( '' ),
                                        label: __( 'Languages Label' ),
                                        onChange: function(val) { setAttributes({languages_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.website_label,
                                        help: __( '' ),
                                        label: __( 'Website Label' ),
                                        onChange: function(val) { setAttributes({website_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.instagram_label,
                                        help: __( '' ),
                                        label: __( 'Instagram Label' ),
                                        onChange: function(val) { setAttributes({instagram_label: val}) },
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
