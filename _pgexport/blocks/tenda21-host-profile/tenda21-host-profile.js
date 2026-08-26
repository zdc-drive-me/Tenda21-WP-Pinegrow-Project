
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
            const blockProps = useBlockProps({ className: 'py-8 md:py-24 px-6 bg-bone-200', 'data-block-name': 'host-profile' });
            const setAttributes = props.setAttributes; 
            
            props.portrait_image = useSelect(function( select ) {
                return {
                    portrait_image: props.attributes.portrait_image.id ? select('core').getMedia(props.attributes.portrait_image.id) : undefined
                };
            }, [props.attributes.portrait_image] ).portrait_image;
            
            
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-7xl mx-auto w-full grid grid-cols-1 md:grid-cols-12 gap-10 md:gap-12 items-start' }, [' ', ' ', el('figure', { className: 'md:col-span-5 lg:col-span-5' }, [' ', ' ', el('div', { className: 'aspect-[4/5] bg-mist-200 overflow-hidden relative' }, [' ', props.attributes.portrait_image && props.attributes.portrait_image.svg && pgGetFeature5("pgCreateSVG")(RawHTML, {}, pgGetFeature5("pgMergeInlineSVGAttributes")(propOrDefault( props.attributes.portrait_image.svg, 'portrait_image', 'svg' ), { className: 'absolute h-full inset-0 object-center object-cover w-full' })), props.attributes.portrait_image && !props.attributes.portrait_image.svg && propOrDefault( props.attributes.portrait_image.url, 'portrait_image', 'url' ) && el('img', { src: propOrDefault( props.attributes.portrait_image.url, 'portrait_image', 'url' ), alt: propOrDefault( props.attributes.portrait_image?.alt, 'portrait_image', 'alt' ), className: 'absolute h-full inset-0 object-center object-cover w-full ' + (props.attributes.portrait_image.id ? ('wp-image-' + props.attributes.portrait_image.id) : ''), loading: 'eager', decoding: 'async', onerror: 'this.style.display=\'none\'; this.parentElement.classList.add(\'bg-[url(/assets/images/background_coastal_sunset_cliffs_2000w_q90.webp)]\',\'bg-cover\',\'bg-center\');' }), ' ', ' ', el('div', { className: 'pointer-events-none absolute inset-0 bg-gradient-to-t from-charcoal-950/10 via-transparent to-transparent' }), ' ']), ' ', el('figcaption', { className: 'mt-4 flex items-center justify-between' }, [' ', el(RichText, { tagName: 'span', className: 'font-sans text-xs uppercase tracking-[0.14em] text-charcoal-600', value: propOrDefault( props.attributes.figure_label, 'figure_label' ), onChange: function(val) { setAttributes( {figure_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']), ' ', ' ', el('div', { className: 'md:col-span-7 lg:col-span-6 md:pt-2' }, [' ', el('div', { className: 'max-w-2xl space-y-6' }, [' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-lg leading-[1.9] text-charcoal-800', value: propOrDefault( props.attributes.bio_p1, 'bio_p1' ), onChange: function(val) { setAttributes( {bio_p1: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-lg leading-[1.9] text-charcoal-800', value: propOrDefault( props.attributes.bio_p2, 'bio_p2' ), onChange: function(val) { setAttributes( {bio_p2: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-lg leading-[1.9] text-charcoal-800', value: propOrDefault( props.attributes.bio_p3, 'bio_p3' ), onChange: function(val) { setAttributes( {bio_p3: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-lg leading-[1.9] text-charcoal-800', value: propOrDefault( props.attributes.bio_p4, 'bio_p4' ), onChange: function(val) { setAttributes( {bio_p4: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', ' ', el('div', { className: 'mt-10 bg-bone-100/60 p-6' }, [' ', el(RichText, { tagName: 'p', className: 'font-serif text-[clamp(1.25rem,2.4vw,1.75rem)] leading-snug text-charcoal-900', value: propOrDefault( props.attributes.pull_quote, 'pull_quote' ), onChange: function(val) { setAttributes( {pull_quote: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                        pgGetFeature5("pgMediaImageControl")('portrait_image', setAttributes, props, 'full', true, 'Portrait Image', '', function(url) { return propOrDefault(url, 'portrait_image', 'url'); } ),
                                        
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.figure_label,
                                        help: __( '' ),
                                        label: __( 'Figure Label' ),
                                        onChange: function(val) { setAttributes({figure_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.bio_p1,
                                        help: __( '' ),
                                        label: __( 'Bio Paragraph 1' ),
                                        onChange: function(val) { setAttributes({bio_p1: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.bio_p2,
                                        help: __( '' ),
                                        label: __( 'Bio Paragraph 2' ),
                                        onChange: function(val) { setAttributes({bio_p2: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.bio_p3,
                                        help: __( '' ),
                                        label: __( 'Bio Paragraph 3' ),
                                        onChange: function(val) { setAttributes({bio_p3: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.bio_p4,
                                        help: __( '' ),
                                        label: __( 'Bio Paragraph 4' ),
                                        onChange: function(val) { setAttributes({bio_p4: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.pull_quote,
                                        help: __( '' ),
                                        label: __( 'Pull Quote' ),
                                        onChange: function(val) { setAttributes({pull_quote: val}) },
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

    block = registerBlockType( 'tenda21/tenda21-host-profile', blockSettings );
} )(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor
);                        
