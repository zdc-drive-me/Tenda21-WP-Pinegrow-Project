
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
    
    const block = registerBlockType( 'tenda21/experience-facilitator', {
        apiVersion: 2,
        title: 'Experience Facilitator',
        description: 'Facilitated By section for a single Experience page. Pulls facilitator image, role, short bio, and profile link from the experience_facilitator relationship field.',
        icon: 'block-default',
        category: 'tenda21_experience',
        keywords: [],
        supports: {},
        attributes: {
            heading_label: {
                type: ['string', 'null'],
                default: `Facilitated By`,
            },
            link_label: {
                type: ['string', 'null'],
                default: `View Full Profile →`,
            }
        },
        example: { attributes: { heading_label: `Facilitated By`, link_label: `View Full Profile →` } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'py-24 px-6 bg-mist-100' });
            const setAttributes = props.setAttributes; 
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-5xl mx-auto w-full' }, [' ', el(RichText, { tagName: 'h2', className: 'font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-charcoal-600 mb-12', value: propOrDefault( props.attributes.heading_label, 'heading_label' ), onChange: function(val) { setAttributes( {heading_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('div', { className: 'grid md:grid-cols-4 gap-8 items-start' }, [' ', el('div', { className: 'md:col-span-1' }, [' ', el('div', { className: 'aspect-[3/4] bg-mist-300 bg-cover bg-center mb-4' }), ' ']), ' ', el('div', { className: 'md:col-span-3 space-y-4' }, [' ', el('div', {}, [' ', el('h3', { className: 'font-serif font-light text-2xl md:text-3xl leading-[1.3] text-charcoal-900 mb-2' }, 'Facilitator Name'), ' ', el('p', { className: 'font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700' }, 'Role / Practice'), ' ']), ' ', el('p', { className: 'font-sans font-light text-lg leading-[1.8] text-charcoal-700' }, 'Short bio excerpt for the facilitator.'), ' ', el(RichText, { tagName: 'a', href: 'facilitators.html', className: 'inline-block font-sans text-sm text-forest-700 hover:text-forest-800 uppercase tracking-[0.1em] transition-colors', value: propOrDefault( props.attributes.link_label, 'link_label' ), onChange: function(val) { setAttributes( {link_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.heading_label,
                                        help: __( '' ),
                                        label: __( 'Section Heading' ),
                                        onChange: function(val) { setAttributes({heading_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.link_label,
                                        help: __( '' ),
                                        label: __( 'Link Label' ),
                                        onChange: function(val) { setAttributes({link_label: val}) },
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
