
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
    
    const block = registerBlockType( 'tenda21/experience-content', {
        apiVersion: 2,
        title: 'Experience Content',
        description: 'Editorial middle section for a single Experience page. Contains What to Expect, Benefits, and Who This Is For subsections.',
        icon: 'block-default',
        category: 'tenda21_experience',
        keywords: [],
        supports: {},
        attributes: {
            expectations_label: {
                type: ['string', 'null'],
                default: `What to Expect`,
            },
            benefits_label: {
                type: ['string', 'null'],
                default: `Benefits`,
            },
            audience_label: {
                type: ['string', 'null'],
                default: `Who This Is For`,
            }
        },
        example: { attributes: { expectations_label: `What to Expect`, benefits_label: `Benefits`, audience_label: `Who This Is For` } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'py-24 px-6 bg-mist-100' });
            const setAttributes = props.setAttributes; 
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-4xl mx-auto w-full space-y-16' }, [' ', ' ', el('div', { className: 'space-y-8' }, [' ', el(RichText, { tagName: 'h2', className: 'font-serif font-light text-3xl md:text-4xl leading-[1.3] text-charcoal-900', value: propOrDefault( props.attributes.expectations_label, 'expectations_label' ), onChange: function(val) { setAttributes( {expectations_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('div', { className: 'space-y-6' }, [' ', el('p', { className: 'font-sans font-light text-lg leading-[1.8] text-charcoal-700' }, 'Describe what participants can expect during the experience.'), ' ']), ' ']), ' ', ' ', el('div', { className: 'border-t border-mist-400 pt-12 space-y-8' }, [' ', el(RichText, { tagName: 'h2', className: 'font-serif font-light text-3xl md:text-4xl leading-[1.3] text-charcoal-900', value: propOrDefault( props.attributes.benefits_label, 'benefits_label' ), onChange: function(val) { setAttributes( {benefits_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('div', { className: 'space-y-4' }, [' ', el('p', { className: 'font-sans font-light text-lg leading-[1.8] text-charcoal-700' }, 'List the key benefits participants will receive.'), ' ']), ' ']), ' ', ' ', el('div', { className: 'border-t border-mist-400 pt-12 space-y-8' }, [' ', el(RichText, { tagName: 'h2', className: 'font-serif font-light text-3xl md:text-4xl leading-[1.3] text-charcoal-900', value: propOrDefault( props.attributes.audience_label, 'audience_label' ), onChange: function(val) { setAttributes( {audience_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('div', { className: 'space-y-6' }, [' ', el('p', { className: 'font-sans font-light text-lg leading-[1.8] text-charcoal-700' }, 'Describe who the experience is suited for, including any contraindications.'), ' ']), ' ']), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.expectations_label,
                                        help: __( '' ),
                                        label: __( 'What to Expect Label' ),
                                        onChange: function(val) { setAttributes({expectations_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.benefits_label,
                                        help: __( '' ),
                                        label: __( 'Benefits Label' ),
                                        onChange: function(val) { setAttributes({benefits_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.audience_label,
                                        help: __( '' ),
                                        label: __( 'Audience Label' ),
                                        onChange: function(val) { setAttributes({audience_label: val}) },
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
