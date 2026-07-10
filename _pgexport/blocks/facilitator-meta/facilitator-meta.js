
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

    };

    block = registerBlockType( 'tenda21/facilitator-meta', blockSettings );
} )(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor
);                        
