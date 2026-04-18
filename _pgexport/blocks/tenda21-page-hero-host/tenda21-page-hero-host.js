
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
    
    const block = registerBlockType( 'tenda21/tenda21-page-hero-host', {
        apiVersion: 2,
        title: 'Page Hero Host',
        description: 'Hero section for the A Anfitriã host page',
        icon: 'block-default',
        category: 'tenda21_host',
        keywords: [],
        supports: {},
        attributes: {
            hero_title: {
                type: ['string', 'null'],
                default: `A Anfitriã`,
            },
            hero_subtitle: {
                type: ['string', 'null'],
                default: `Sobre quem sustenta a casa`,
            }
        },
        example: { attributes: { hero_title: `A Anfitriã`, hero_subtitle: `Sobre quem sustenta a casa` } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'relative pt-40 pb-16 px-6 bg-bone-200', 'data-block-name': 'page-hero-host' });
            const setAttributes = props.setAttributes; 
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-4xl mx-auto w-full text-center' }, [' ', el(RichText, { tagName: 'h1', className: 'font-serif font-light text-[clamp(2.5rem,6vw,4.5rem)] leading-[1.2] tracking-[0.02em] text-charcoal-900 mb-4', value: propOrDefault( props.attributes.hero_title, 'hero_title' ), onChange: function(val) { setAttributes( {hero_title: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-base uppercase tracking-[0.12em] text-charcoal-600', value: propOrDefault( props.attributes.hero_subtitle, 'hero_subtitle' ), onChange: function(val) { setAttributes( {hero_subtitle: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.hero_title,
                                        help: __( '' ),
                                        label: __( 'Hero Title' ),
                                        onChange: function(val) { setAttributes({hero_title: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.hero_subtitle,
                                        help: __( '' ),
                                        label: __( 'Hero Subtitle' ),
                                        onChange: function(val) { setAttributes({hero_subtitle: val}) },
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
