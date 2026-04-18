
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
    
    const block = registerBlockType( 'tenda21/header', {
        apiVersion: 2,
        title: 'Header',
        description: 'Site header with logo and navigation',
        icon: 'block-default',
        category: 'tenda21_blocks',
        keywords: [],
        supports: {},
        attributes: {
        },
        example: { attributes: {  } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'max-w-7xl mx-auto px-6 py-6 flex items-center justify-between w-full' });
            const setAttributes = props.setAttributes; 
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('div', { ...blockProps }, [' ', el('a', { href: 'index.html', className: 'font-serif font-light text-2xl text-charcoal-900 hover:text-charcoal-700 transition-colors' }, ' Tenda 21 '), ' ', el('div', { className: 'flex gap-8 items-center' }, [' ', el('ul', { className: 'flex gap-8 items-center', style: { listStyle: 'none',margin: '0',padding: '0' } }, [' ', el('li', {}, el('a', { href: 'experiences.html', className: 'font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]' }, 'Experiences')), ' ', el('li', {}, el('a', { href: 'facilitators.html', className: 'font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]' }, 'Facilitators')), ' ', el('li', {}, el('a', { href: 'a-anfitria.html', className: 'font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]' }, 'A Anfitriã')), ' ', el('li', {}, el('a', { href: 'mailto:hello@tenda21.com', className: 'font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]' }, 'Contact')), ' ']), ' ']), ' ']),                        
                
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
