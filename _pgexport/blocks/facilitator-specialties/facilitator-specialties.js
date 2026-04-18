
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
    
    const block = registerBlockType( 'tenda21/facilitator-specialties', {
        apiVersion: 2,
        title: 'Facilitator Specialties',
        description: 'Areas of expertise tag cloud for a Facilitator page. Maps to facilitator_specialties SCF field.',
        icon: 'block-default',
        category: 'tenda21_facilitator',
        keywords: [],
        supports: {},
        attributes: {
            facilitator_specialties: {
                type: ['string', 'null'],
                default: `<span class="px-4 py-2 bg-mist-200 text-charcoal-700 font-sans text-sm">Specialty One</span> <span class="px-4 py-2 bg-mist-200 text-charcoal-700 font-sans text-sm">Specialty Two</span> <span class="px-4 py-2 bg-mist-200 text-charcoal-700 font-sans text-sm">Specialty Three</span>`,
            }
        },
        example: { attributes: { facilitator_specialties: `<span class="px-4 py-2 bg-mist-200 text-charcoal-700 font-sans text-sm">Specialty One</span> <span class="px-4 py-2 bg-mist-200 text-charcoal-700 font-sans text-sm">Specialty Two</span> <span class="px-4 py-2 bg-mist-200 text-charcoal-700 font-sans text-sm">Specialty Three</span>` } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'py-12 px-6 bg-bone-200' });
            const setAttributes = props.setAttributes; 
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-6xl mx-auto w-full' }, [' ', el('div', { className: 'pt-8 border-t border-mist-400' }, [' ', el('h3', { className: 'font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-charcoal-600 mb-4' }, 'Areas of Expertise'), ' ', el(RichText, { tagName: 'div', className: 'flex flex-wrap gap-3', value: propOrDefault( props.attributes.facilitator_specialties, 'facilitator_specialties' ), onChange: function(val) { setAttributes( {facilitator_specialties: val }) } }), ' ']), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(BaseControl, {
                                        help: __( '' ),
                                        label: __( 'Specialties' ),
                                    }, [
                                        el(RichText, {
                                            value: props.attributes.facilitator_specialties,
                                            style: {
                                                    border: '1px solid black',
                                                    padding: '6px 8px',
                                                    minHeight: '80px',
                                                    border: '1px solid rgb(117, 117, 117)',
                                                    fontSize: '13px',
                                                    lineHeight: 'normal'
                                                },
                                            onChange: function(val) { setAttributes({facilitator_specialties: val}) },
                                        })
                                    ]),    
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
