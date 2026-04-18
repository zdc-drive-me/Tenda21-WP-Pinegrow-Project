
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
    
    const block = registerBlockType( 'tenda21/facilitator-hero-single', {
        apiVersion: 2,
        title: 'Facilitator Hero Single Page',
        description: 'Hero section for a single Facilitator page. Shows back link, photo, name, role label, and long bio (post content).',
        icon: 'block-default',
        category: 'tenda21_blocks',
        keywords: [],
        supports: {},
        attributes: {
            facilitator_featured: {
                type: ['object', 'null'],
                default: {id: 0, url: '', size: '', svg: '', alt: null},
            },
            title: {
                type: ['string', 'null'],
                default: `Ana Silva`,
            },
            facilitator_role_label: {
                type: ['string', 'null'],
                default: `Meditation &amp; Silence Practice`,
            },
            post_content: {
                type: ['string', 'null'],
                default: `<p class="font-sans font-light text-lg md:text-xl leading-[1.8] text-charcoal-700">Ana discovered meditation not in a monastery, but in the wreckage of burnout. Twenty years ago, after collapsing under the weight of an unsustainable career, she found her way to a ten-day Vipassana retreat. She went seeking relief. She found a life.</p> <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700">Since then, Ana has studied with teachers across traditions—Theravada, Zen, and Insight Meditation—completing multiple long-term silent retreats and teacher training programs. But her real teacher, she says, is daily practice: the unglamorous work of showing up to the cushion every morning, regardless of mood or circumstance.</p> <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700">Ana's teaching style is marked by clarity, kindness, and an absence of spiritual bypassing. She doesn't promise bliss or transcendence. She offers tools for being with what is—the pleasant, the unpleasant, and everything in between. Participants often describe her presence as both gentle and uncompromising, a rare combination that creates profound safety.</p> <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700">When not guiding retreats, Ana lives quietly in Lisbon, where she maintains a small meditation sangha and works as a psychotherapist specializing in contemplative approaches to anxiety and trauma.</p>`,
            }
        },
        example: { attributes: { facilitator_featured: {id: 0, url: '', size: '', svg: '', alt: null}, title: `Ana Silva`, facilitator_role_label: `Meditation &amp; Silence Practice`, post_content: `<p class="font-sans font-light text-lg md:text-xl leading-[1.8] text-charcoal-700">Ana discovered meditation not in a monastery, but in the wreckage of burnout. Twenty years ago, after collapsing under the weight of an unsustainable career, she found her way to a ten-day Vipassana retreat. She went seeking relief. She found a life.</p> <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700">Since then, Ana has studied with teachers across traditions—Theravada, Zen, and Insight Meditation—completing multiple long-term silent retreats and teacher training programs. But her real teacher, she says, is daily practice: the unglamorous work of showing up to the cushion every morning, regardless of mood or circumstance.</p> <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700">Ana's teaching style is marked by clarity, kindness, and an absence of spiritual bypassing. She doesn't promise bliss or transcendence. She offers tools for being with what is—the pleasant, the unpleasant, and everything in between. Participants often describe her presence as both gentle and uncompromising, a rare combination that creates profound safety.</p> <p class="font-sans font-light text-lg leading-[1.8] text-charcoal-700">When not guiding retreats, Ana lives quietly in Lisbon, where she maintains a small meditation sangha and works as a psychotherapist specializing in contemplative approaches to anxiety and trauma.</p>` } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'relative pt-32 pb-24 px-6 bg-bone-200', 'data-block-name': 'facilitator-hero' });
            const setAttributes = props.setAttributes; 
            
            props.facilitator_featured = useSelect(function( select ) {
                return {
                    facilitator_featured: props.attributes.facilitator_featured.id ? select('core').getMedia(props.attributes.facilitator_featured.id) : undefined
                };
            }, [props.attributes.facilitator_featured] ).facilitator_featured;
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, [' ', el('div', { className: 'max-w-6xl mx-auto w-full' }, [' ', el('div', { className: 'grid md:grid-cols-5 gap-12 items-start' }, [' ', el('div', { className: 'md:col-span-2' }, [' ', el('div', { className: 'aspect-[3/4] bg-mist-300 bg-[url(\'https://images.unsplash.com/photo-1506677162879-a52bf9de54d0?ixid=M3wyMDkyMnwwfDF8c2VhcmNofDl8fG1lZGl0YXRpb24lMjByZXRyZWF0fGVufDB8fHx8MTc3MzA3ODExNHww&ixlib=rb-4.1.0q=85&fm=jpg&crop=faces&cs=srgb&w=1200&h=800&fit=crop\')] bg-cover bg-center sticky top-32', style: { ...((propOrDefault( props.attributes.facilitator_featured.url, 'facilitator_featured', 'url' ) ? ('url(' + propOrDefault( props.attributes.facilitator_featured.url, 'facilitator_featured', 'url' ) + ')') : null !== null && propOrDefault( props.attributes.facilitator_featured.url, 'facilitator_featured', 'url' ) ? ('url(' + propOrDefault( props.attributes.facilitator_featured.url, 'facilitator_featured', 'url' ) + ')') : null !== '') ? {backgroundImage: propOrDefault( props.attributes.facilitator_featured.url, 'facilitator_featured', 'url' ) ? ('url(' + propOrDefault( props.attributes.facilitator_featured.url, 'facilitator_featured', 'url' ) + ')') : null} : {}) } }), ' ']), ' ', el('div', { className: 'md:col-span-3 space-y-8' }, [' ', el('div', {}, [' ', el('a', { href: 'facilitators.html', className: 'inline-block font-sans uppercase text-[0.65rem] tracking-[0.15em] font-medium text-forest-700 hover:text-forest-800 mb-6 transition-colors' }, '← All Facilitators'), ' ', el(RichText, { tagName: 'h1', className: 'font-serif font-light text-[clamp(2.5rem,6vw,4.5rem)] leading-[1.2] tracking-[0.02em] text-charcoal-900 mb-4', value: propOrDefault( props.attributes.title, 'title' ), onChange: function(val) { setAttributes( {title: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'p', className: 'font-sans uppercase text-[0.75rem] tracking-[0.15em] font-medium text-forest-700', value: propOrDefault( props.attributes.facilitator_role_label, 'facilitator_role_label' ), onChange: function(val) { setAttributes( {facilitator_role_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', el(RichText, { tagName: 'div', className: 'space-y-6', value: propOrDefault( props.attributes.post_content, 'post_content' ), onChange: function(val) { setAttributes( {post_content: val }) } }), ' ']), ' ']), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                        pgGetFeature4("pgMediaImageControl")('facilitator_featured', setAttributes, props, 'full', true, 'Featured Photo', '' ),
                                        
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.title,
                                        help: __( '' ),
                                        label: __( 'Name' ),
                                        onChange: function(val) { setAttributes({title: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.facilitator_role_label,
                                        help: __( '' ),
                                        label: __( 'Role Label' ),
                                        onChange: function(val) { setAttributes({facilitator_role_label: val}) },
                                        type: 'text'
                                    }),
                                    el(BaseControl, {
                                        help: __( '' ),
                                        label: __( 'Bio (Post Content)' ),
                                    }, [
                                        el(RichText, {
                                            value: props.attributes.post_content,
                                            style: {
                                                    border: '1px solid black',
                                                    padding: '6px 8px',
                                                    minHeight: '80px',
                                                    border: '1px solid rgb(117, 117, 117)',
                                                    fontSize: '13px',
                                                    lineHeight: 'normal'
                                                },
                                            onChange: function(val) { setAttributes({post_content: val}) },
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
