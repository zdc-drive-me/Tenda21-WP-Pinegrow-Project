
( function ( blocks, element, blockEditor ) {
    const el = element.createElement,
        registerBlockType = blocks.registerBlockType,
        ServerSideRender = pgGetFeature5("PgGetServerSideRender")(),
        InspectorControls = blockEditor.InspectorControls,
        useBlockProps = blockEditor.useBlockProps;
        
    const {__} = wp.i18n;
    const {ColorPicker, TextControl, ToggleControl, SelectControl, Panel, PanelBody, Disabled, TextareaControl, BaseControl} = wp.components;
    const {useSelect} = wp.data;
    const {RawHTML, Fragment} = element;
   
    const {InnerBlocks, URLInputButton, RichText} = wp.blockEditor;
    const useInnerBlocksProps = blockEditor.useInnerBlocksProps || blockEditor.__experimentalUseInnerBlocksProps;
    
    let block;
    const projectData = window.pg_project_data_tenda21 || {};

    const isMediaAttribute = function(prop) {
        const def = block.attributes && block.attributes[prop] && block.attributes[prop].default;
        return def && typeof def === 'object' && 'id' in def && 'url' in def && 'svg' in def && 'alt' in def;
    }

    const resolveMediaUrl = function(url) {
        if(typeof url === 'string' && url && url.charAt(0) !== '#' && !/^(?:[a-z][a-z0-9+.-]*:|\/\/)/i.test(url)) {
            const baseUrl = projectData.url || '';
            return baseUrl ? baseUrl.replace(/\/$/, '') + (url.charAt(0) === '/' ? url : '/' + url) : url;
        }
        return url;
    }

    const propOrDefault = function(val, prop, field) {
        let useDefaultValue = false;
        const defaultValue = block.attributes && block.attributes[prop] ? block.attributes[prop].default : undefined;
        if(defaultValue !== undefined && (val === null || val === '')) {
            useDefaultValue = true;
            val = field && defaultValue ? defaultValue[field] : defaultValue;
        }
        if(field && defaultValue && val === defaultValue[field]) {
            useDefaultValue = true;
        }
        if(useDefaultValue && field === 'url' && isMediaAttribute(prop)) {
            return resolveMediaUrl(val);
        }
        return val;
    }
    
    const blockSettings = {
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'backdrop-blur-xs bg-bone-200/60 border-mist-400/50 fixed left-0 right-0 site-main-nav top-0 z-50' });
            const setAttributes = props.setAttributes; 
            
            
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('nav', { ...blockProps }, [' ', el('div', { className: 'max-w-7xl mx-auto px-6 py-6 flex items-center justify-between w-full' }, [' ', el('a', { href: 'index.html', className: 'font-serif font-light text-2xl text-charcoal-900 hover:text-charcoal-700 transition-colors' }, 'Tenda 21'), ' ', el('div', { className: 'flex gap-8 items-center' }, [' ', el('ul', { className: 'flex gap-8 items-center' }, [' ', el('li', { className: 'nav-item' }, [' ', el('a', { href: 'experiences.html', className: 'font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]' }, 'Experiences'), ' ']), ' ', el('li', { className: 'nav-item' }, [' ', el('a', { href: 'facilitators.html', className: 'font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]' }, 'Facilitators'), ' ']), ' ', el('li', { className: 'nav-item' }, [' ', el('a', { href: 'a-anfitria.html', className: 'font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]' }, 'A Anfitriã'), ' ']), ' ', el('li', { className: 'nav-item' }, [' ', el('a', { href: 'mailto:hello@tenda21.com', className: 'font-sans text-sm font-normal text-charcoal-700 hover:text-charcoal-900 transition-colors tracking-[0.1em]' }, 'Contact'), ' ']), ' ']), ' ']), ' ']), ' ']),                        
                
            ]);
        },

        save: function(props) {
            return null;
        }                        

    };

    block = registerBlockType( 'tenda21/main-navigation', blockSettings );
} )(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor
);                        
