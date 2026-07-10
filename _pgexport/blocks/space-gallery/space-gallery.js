
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
            const blockProps = useBlockProps({ className: 'py-32 px-6 bg-bone-200', 'data-block-name': 'space-gallery' });
            const setAttributes = props.setAttributes; 
            
            props.image_1 = useSelect(function( select ) {
                return {
                    image_1: props.attributes.image_1.id ? select('core').getMedia(props.attributes.image_1.id) : undefined
                };
            }, [props.attributes.image_1] ).image_1;
            

            props.image_2 = useSelect(function( select ) {
                return {
                    image_2: props.attributes.image_2.id ? select('core').getMedia(props.attributes.image_2.id) : undefined
                };
            }, [props.attributes.image_2] ).image_2;
            

            props.image_wide = useSelect(function( select ) {
                return {
                    image_wide: props.attributes.image_wide.id ? select('core').getMedia(props.attributes.image_wide.id) : undefined
                };
            }, [props.attributes.image_wide] ).image_wide;
            
            
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-7xl mx-auto w-full' }, [' ', el(RichText, { tagName: 'h2', className: 'font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-charcoal-600 text-center mb-20', value: propOrDefault( props.attributes.section_title, 'section_title' ), onChange: function(val) { setAttributes( {section_title: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('div', { className: 'grid md:grid-cols-2 gap-8' }, [' ', el('div', { className: 'aspect-[4/5] bg-mist-300 bg-[url(\'https://images.unsplash.com/photo-1640348307767-b8e8bc765ff5?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDE4fHxpbnRlcmlvciUyMGxpbmVufGVufDB8fHx8MTc3MzA2NTg0MXww&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=1200&h=800&fit=crop\')] bg-cover bg-center opacity-0 [animation:fadeInScale_1s_ease-out_forwards] [animation-timeline:view()] [animation-range:entry_0%_entry_40%]', style: { ...((propOrDefault( props.attributes.image_1.url, 'image_1', 'url' ) ? ('url(' + propOrDefault( props.attributes.image_1.url, 'image_1', 'url' ) + ')') : null !== null && propOrDefault( props.attributes.image_1.url, 'image_1', 'url' ) ? ('url(' + propOrDefault( props.attributes.image_1.url, 'image_1', 'url' ) + ')') : null !== '') ? {backgroundImage: propOrDefault( props.attributes.image_1.url, 'image_1', 'url' ) ? ('url(' + propOrDefault( props.attributes.image_1.url, 'image_1', 'url' ) + ')') : null} : {}) } }), ' ', el('div', { className: 'aspect-[4/5] bg-mist-300 bg-[url(\'https://images.unsplash.com/photo-1520682464353-63a64fa8bf98?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDE4fHxmb3Jlc3QlMjBwYXRofGVufDB8fHx8MTc3MzA2NTg0Mnww&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=1200&h=800&fit=crop\')] bg-cover bg-center opacity-0 [animation:fadeInScale_1s_ease-out_forwards] [animation-timeline:view()] [animation-range:entry_0%_entry_40%]', style: { ...((propOrDefault( props.attributes.image_2.url, 'image_2', 'url' ) ? ('url(' + propOrDefault( props.attributes.image_2.url, 'image_2', 'url' ) + ')') : null !== null && propOrDefault( props.attributes.image_2.url, 'image_2', 'url' ) ? ('url(' + propOrDefault( props.attributes.image_2.url, 'image_2', 'url' ) + ')') : null !== '') ? {backgroundImage: propOrDefault( props.attributes.image_2.url, 'image_2', 'url' ) ? ('url(' + propOrDefault( props.attributes.image_2.url, 'image_2', 'url' ) + ')') : null} : {}) } }), ' ', el('div', { className: 'md:col-span-2 aspect-[16/9] bg-mist-300 bg-[url(\'https://images.unsplash.com/photo-1602395714441-e4a5686cbb59?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDE0fHxhcmNoaXRlY3R1cmUlMjB3b29kfGVufDB8fHx8MTc3MzA2NTg0Mnww&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=1200&h=800&fit=crop\')] bg-cover bg-center opacity-0 [animation:fadeInScale_1s_ease-out_forwards] [animation-timeline:view()] [animation-range:entry_0%_entry_40%]', style: { ...((propOrDefault( props.attributes.image_wide.url, 'image_wide', 'url' ) ? ('url(' + propOrDefault( props.attributes.image_wide.url, 'image_wide', 'url' ) + ')') : null !== null && propOrDefault( props.attributes.image_wide.url, 'image_wide', 'url' ) ? ('url(' + propOrDefault( props.attributes.image_wide.url, 'image_wide', 'url' ) + ')') : null !== '') ? {backgroundImage: propOrDefault( props.attributes.image_wide.url, 'image_wide', 'url' ) ? ('url(' + propOrDefault( props.attributes.image_wide.url, 'image_wide', 'url' ) + ')') : null} : {}) } }), ' ']), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                        pgGetFeature5("pgMediaImageControl")('image_1', setAttributes, props, 'full', true, 'Image 1', '', function(url) { return propOrDefault(url, 'image_1', 'url'); } ),
                                        
                        pgGetFeature5("pgMediaImageControl")('image_2', setAttributes, props, 'full', true, 'Image 2', '', function(url) { return propOrDefault(url, 'image_2', 'url'); } ),
                                        
                        pgGetFeature5("pgMediaImageControl")('image_wide', setAttributes, props, 'full', true, 'Wide Image', '', function(url) { return propOrDefault(url, 'image_wide', 'url'); } ),
                                        
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.section_title,
                                        help: __( '' ),
                                        label: __( 'Section Title' ),
                                        onChange: function(val) { setAttributes({section_title: val}) },
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

    };

    block = registerBlockType( 'tenda21/space-gallery', blockSettings );
} )(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor
);                        
