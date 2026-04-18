
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
    
    const block = registerBlockType( 'tenda21/tenda21-host-profile', {
        apiVersion: 2,
        title: 'Host Profile',
        description: 'Portrait image and bio for the host',
        icon: 'block-default',
        category: 'tenda21_host',
        keywords: [],
        supports: {},
        attributes: {
            portrait_image: {
                type: ['object', 'null'],
                default: {id: 0, url: 'https://images.unsplash.com/photo-1649976128988-3af35adda2d7?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDExfHxhc3NldHMlMkZzJTJGaG9zdCUyMHBvcnRyYWl0fGVufDB8fHx8MTc3MzE3NDAzMnww&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=1200&h=800&fit=crop', size: '', svg: '', alt: 'Retrato da anfitriã'},
            },
            figure_label: {
                type: ['string', 'null'],
                default: `A anfitriã`,
            },
            bio_p1: {
                type: ['string', 'null'],
                default: `Sempre fui movida por encontros. Pelo desejo de abrir a casa, reunir pessoas e cuidar do espaço que as recebe, para que se sintam bem. Há algo simples e bonito nesse gesto.`,
            },
            bio_p2: {
                type: ['string', 'null'],
                default: `Venho das artes e da fotografia, onde aprendi a afinar a sensibilidade e o olhar, a perceber nuances e a reconhecer o que é essencial. Nasci no Brasil e ainda jovem fui viver na Itália. Essa travessia me ensinou a me reinventar e a receber o mundo com outros olhos. Com o tempo, fui me aproximando de estudos e práticas que ampliam a percepção e aprofundam a escuta. Não como teoria, mas como caminho vivido. Aos poucos, esse modo de viver foi pedindo forma.`,
            },
            bio_p3: {
                type: ['string', 'null'],
                default: `Foi assim que a Tenda 21 começou a se revelar. Não como um plano, mas como uma continuidade espontânea&nbsp;do que sempre fiz naturalmente. Um espaço que reúne presença, integração e expansão, onde os encontros acontecem com verdade.`,
            },
            bio_p4: {
                type: ['string', 'null'],
                default: `Aqui, meu papel não é conduzir. É sustentar. Convido facilitadores, organizo o ritmo da casa, preparo a mesa, cuido da atmosfera. A Tenda acolhe grupos pequenos, preservando a proximidade que sustenta a troca.`,
            },
            pull_quote: {
                type: ['string', 'null'],
                default: `“Acolher é criar espaço para que o essencial apareça.”`,
            }
        },
        example: { attributes: { portrait_image: {id: 0, url: 'https://images.unsplash.com/photo-1649976128988-3af35adda2d7?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDExfHxhc3NldHMlMkZzJTJGaG9zdCUyMHBvcnRyYWl0fGVufDB8fHx8MTc3MzE3NDAzMnww&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=1200&h=800&fit=crop', size: '', svg: '', alt: 'Retrato da anfitriã'}, figure_label: `A anfitriã`, bio_p1: `Sempre fui movida por encontros. Pelo desejo de abrir a casa, reunir pessoas e cuidar do espaço que as recebe, para que se sintam bem. Há algo simples e bonito nesse gesto.`, bio_p2: `Venho das artes e da fotografia, onde aprendi a afinar a sensibilidade e o olhar, a perceber nuances e a reconhecer o que é essencial. Nasci no Brasil e ainda jovem fui viver na Itália. Essa travessia me ensinou a me reinventar e a receber o mundo com outros olhos. Com o tempo, fui me aproximando de estudos e práticas que ampliam a percepção e aprofundam a escuta. Não como teoria, mas como caminho vivido. Aos poucos, esse modo de viver foi pedindo forma.`, bio_p3: `Foi assim que a Tenda 21 começou a se revelar. Não como um plano, mas como uma continuidade espontânea&nbsp;do que sempre fiz naturalmente. Um espaço que reúne presença, integração e expansão, onde os encontros acontecem com verdade.`, bio_p4: `Aqui, meu papel não é conduzir. É sustentar. Convido facilitadores, organizo o ritmo da casa, preparo a mesa, cuido da atmosfera. A Tenda acolhe grupos pequenos, preservando a proximidade que sustenta a troca.`, pull_quote: `“Acolher é criar espaço para que o essencial apareça.”` } },
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
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-7xl mx-auto w-full grid grid-cols-1 md:grid-cols-12 gap-10 md:gap-12 items-start' }, [' ', ' ', el('figure', { className: 'md:col-span-5 lg:col-span-5' }, [' ', ' ', el('div', { className: 'aspect-[4/5] bg-mist-200 overflow-hidden relative' }, [' ', props.attributes.portrait_image && props.attributes.portrait_image.svg && pgGetFeature4("pgCreateSVG")(RawHTML, {}, pgGetFeature4("pgMergeInlineSVGAttributes")(propOrDefault( props.attributes.portrait_image.svg, 'portrait_image', 'svg' ), { className: 'absolute inset-0 h-full w-full object-cover object-center' })), props.attributes.portrait_image && !props.attributes.portrait_image.svg && propOrDefault( props.attributes.portrait_image.url, 'portrait_image', 'url' ) && el('img', { src: propOrDefault( props.attributes.portrait_image.url, 'portrait_image', 'url' ), alt: propOrDefault( props.attributes.portrait_image?.alt, 'portrait_image', 'alt' ), className: 'absolute h-full inset-0 object-center object-cover w-full ' + (props.attributes.portrait_image.id ? ('wp-image-' + props.attributes.portrait_image.id) : ''), loading: 'eager', decoding: 'async', onerror: 'this.style.display=\'none\'; this.parentElement.classList.add(\'bg-[url(/assets/images/background_coastal_sunset_cliffs_2000w_q90.webp)]\',\'bg-cover\',\'bg-center\');' }), ' ', ' ', el('div', { className: 'pointer-events-none absolute inset-0 bg-gradient-to-t from-charcoal-950/10 via-transparent to-transparent' }), ' ']), ' ', el('figcaption', { className: 'mt-4 flex items-center justify-between' }, [' ', el(RichText, { tagName: 'span', className: 'font-sans text-xs uppercase tracking-[0.14em] text-charcoal-600', value: propOrDefault( props.attributes.figure_label, 'figure_label' ), onChange: function(val) { setAttributes( {figure_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('span', { className: 'font-sans text-xs text-charcoal-500' }, 'Retrato • 4:5'), ' ']), ' ']), ' ', ' ', el('div', { className: 'md:col-span-7 lg:col-span-6 md:pt-2' }, [' ', el('div', { className: 'max-w-2xl space-y-6' }, [' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-lg leading-[1.9] text-charcoal-800', value: propOrDefault( props.attributes.bio_p1, 'bio_p1' ), onChange: function(val) { setAttributes( {bio_p1: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-lg leading-[1.9] text-charcoal-800', value: propOrDefault( props.attributes.bio_p2, 'bio_p2' ), onChange: function(val) { setAttributes( {bio_p2: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-lg leading-[1.9] text-charcoal-800', value: propOrDefault( props.attributes.bio_p3, 'bio_p3' ), onChange: function(val) { setAttributes( {bio_p3: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans font-light text-lg leading-[1.9] text-charcoal-800', value: propOrDefault( props.attributes.bio_p4, 'bio_p4' ), onChange: function(val) { setAttributes( {bio_p4: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', ' ', el('div', { className: 'mt-10 bg-bone-100/60 p-6' }, [' ', el(RichText, { tagName: 'p', className: 'font-serif text-[clamp(1.25rem,2.4vw,1.75rem)] leading-snug text-charcoal-900', value: propOrDefault( props.attributes.pull_quote, 'pull_quote' ), onChange: function(val) { setAttributes( {pull_quote: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                        pgGetFeature4("pgMediaImageControl")('portrait_image', setAttributes, props, 'full', true, 'Portrait Image', '' ),
                                        
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

    } );
} )(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor
);                        
