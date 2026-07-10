
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
            const blockProps = useBlockProps({ className: 'py-32 md:py-48 px-6 bg-bone-200', 'data-block-name': 'philosophy-section' });
            const setAttributes = props.setAttributes; 
            
            
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-4xl mx-auto space-y-16 w-full' }, [' ', el(RichText, { tagName: 'p', className: 'font-serif font-light text-[clamp(1.75rem,4vw,3rem)] leading-[1.4] text-charcoal-800 text-center', value: propOrDefault( props.attributes.quote, 'quote' ), onChange: function(val) { setAttributes( {quote: val }) } }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-lg md:text-xl leading-[1.8] text-charcoal-700 max-w-[65ch] mx-auto', value: propOrDefault( props.attributes.paragraph_1, 'paragraph_1' ), onChange: function(val) { setAttributes( {paragraph_1: val }) } }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-lg md:text-xl leading-[1.8] text-charcoal-700 max-w-[65ch] mx-auto', value: propOrDefault( props.attributes.paragraph_2, 'paragraph_2' ), onChange: function(val) { setAttributes( {paragraph_2: val }) } }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-lg md:text-xl leading-[1.8] text-charcoal-700 max-w-[65ch] mx-auto', value: propOrDefault( props.attributes.paragraph_3, 'paragraph_3' ), onChange: function(val) { setAttributes( {paragraph_3: val }) } }), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(BaseControl, {
                                        help: __( '' ),
                                        label: __( 'Quote' ),
                                    }, [
                                        el(RichText, {
                                            value: props.attributes.quote,
                                            style: {
                                                    border: '1px solid black',
                                                    padding: '6px 8px',
                                                    minHeight: '80px',
                                                    border: '1px solid rgb(117, 117, 117)',
                                                    fontSize: '13px',
                                                    lineHeight: 'normal'
                                                },
                                            onChange: function(val) { setAttributes({quote: val}) },
                                        })
                                    ]),
                                    el(BaseControl, {
                                        help: __( '' ),
                                        label: __( 'Paragraph 1' ),
                                    }, [
                                        el(RichText, {
                                            value: props.attributes.paragraph_1,
                                            style: {
                                                    border: '1px solid black',
                                                    padding: '6px 8px',
                                                    minHeight: '80px',
                                                    border: '1px solid rgb(117, 117, 117)',
                                                    fontSize: '13px',
                                                    lineHeight: 'normal'
                                                },
                                            onChange: function(val) { setAttributes({paragraph_1: val}) },
                                        })
                                    ]),
                                    el(BaseControl, {
                                        help: __( '' ),
                                        label: __( 'Paragraph 2' ),
                                    }, [
                                        el(RichText, {
                                            value: props.attributes.paragraph_2,
                                            style: {
                                                    border: '1px solid black',
                                                    padding: '6px 8px',
                                                    minHeight: '80px',
                                                    border: '1px solid rgb(117, 117, 117)',
                                                    fontSize: '13px',
                                                    lineHeight: 'normal'
                                                },
                                            onChange: function(val) { setAttributes({paragraph_2: val}) },
                                        })
                                    ]),
                                    el(BaseControl, {
                                        help: __( '' ),
                                        label: __( 'Paragraph 3' ),
                                    }, [
                                        el(RichText, {
                                            value: props.attributes.paragraph_3,
                                            style: {
                                                    border: '1px solid black',
                                                    padding: '6px 8px',
                                                    minHeight: '80px',
                                                    border: '1px solid rgb(117, 117, 117)',
                                                    fontSize: '13px',
                                                    lineHeight: 'normal'
                                                },
                                            onChange: function(val) { setAttributes({paragraph_3: val}) },
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

    };

    block = registerBlockType( 'tenda21/philosophy', blockSettings );
} )(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor
);                        
