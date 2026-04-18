
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
    
    const block = registerBlockType( 'tenda21/facilitator-hero', {
        apiVersion: 2,
        title: 'Facilitator Hero',
        description: 'Hero section for a single Facilitator page. Shows photo, name, role label, and long bio (post content).',
        icon: 'block-default',
        category: 'tenda21_facilitator',
        keywords: [],
        supports: {},
        attributes: {
            back_link_label: {
                type: ['string', 'null'],
                default: `← All Facilitators`,
            }
        },
        example: { attributes: { back_link_label: `← All Facilitators` } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'relative pt-32 pb-24 px-6 bg-bone-200' });
            const setAttributes = props.setAttributes; 
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-6xl mx-auto w-full' }, [' ', el('div', { className: 'grid md:grid-cols-5 gap-12 items-start' }, [' ', el('div', { className: 'md:col-span-2' }, [' ', el('div', { className: 'aspect-[3/4] bg-mist-300 bg-cover bg-center sticky top-32' }), ' ']), ' ', el('div', { className: 'md:col-span-3 space-y-8' }, [' ', el('div', {}, [' ', el('a', { href: 'facilitators.html', className: 'inline-block font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700 hover:text-forest-800 mb-6 transition-colors' }, [' ', el(RichText, { tagName: 'span', value: propOrDefault( props.attributes.back_link_label, 'back_link_label' ), onChange: function(val) { setAttributes( {back_link_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', el('h1', { className: 'font-serif font-light text-[clamp(2.5rem,6vw,4.5rem)] leading-[1.2] tracking-[0.02em] text-charcoal-900 mb-4' }, 'Facilitator Name'), ' ', el('p', { className: 'font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-forest-700' }, 'Role / Practice'), ' ']), ' ', el('div', { className: 'space-y-6' }, [' ', el('p', { className: 'font-light font-sans leading-[1.8] text-charcoal-700 text-lg md:text-xl' }, 'Facilitator long bio text goes here. This is the WordPress post content area.'), ' ']), ' ']), ' ']), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.back_link_label,
                                        help: __( '' ),
                                        label: __( 'Back Link Label' ),
                                        onChange: function(val) { setAttributes({back_link_label: val}) },
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
