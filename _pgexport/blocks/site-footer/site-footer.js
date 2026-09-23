
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
            const blockProps = useBlockProps({ className: 'hidden md:block site-footer-nav bg-white' });
            const setAttributes = props.setAttributes; 
            
            
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('footer', { ...blockProps }, [' ', el('div', { className: 'mx-auto max-w-[1600px] px-5 md:px-8 lg:px-10' }, [' ', el('img', { src: (pg_project_data_tenda21 ? pg_project_data_tenda21.url : '') + 'assets/images/home/footer%20devider.webp', alt: '', 'aria-hidden': 'true', className: 'block h-[15px] w-full object-fill' }), ' ', el('div', { className: 'mx-auto grid max-w-[1100px] grid-cols-1 gap-10 py-12 text-center sm:grid-cols-2 md:gap-12 lg:grid-cols-4 lg:py-16' }, [' ', ' ', el('div', { className: 'flex flex-col items-center' }, [' ', el(RichText, { tagName: 'h2', className: 'mb-5 font-sans text-[13px] font-normal uppercase tracking-[0.18em] text-blue_tenda-500', value: propOrDefault( props.attributes.connect_heading, 'connect_heading' ), onChange: function(val) { setAttributes( {connect_heading: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('div', { className: 'flex flex-col items-center gap-3' }, [' ', el(RichText, { tagName: 'a', href: propOrDefault( props.attributes.instagram_link.url, 'instagram_link', 'url' ), className: 'font-sans text-sm font-light text-blue_tenda-500 transition-colors duration-300 hover:text-caramelo_tenda-500', onClick: function(e) { e.preventDefault(); }, value: propOrDefault( props.attributes.instagram_label, 'instagram_label' ), onChange: function(val) { setAttributes( {instagram_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el(RichText, { tagName: 'a', href: propOrDefault( props.attributes.whatsapp_link.url, 'whatsapp_link', 'url' ), className: 'font-sans text-sm font-light text-blue_tenda-500 transition-colors duration-300 hover:text-caramelo_tenda-500', onClick: function(e) { e.preventDefault(); }, value: propOrDefault( props.attributes.whatsapp_label, 'whatsapp_label' ), onChange: function(val) { setAttributes( {whatsapp_label: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ']), ' ', ' ', el('div', { className: 'flex flex-col items-center' }, [' ', el(RichText, { tagName: 'h2', className: 'mb-5 font-sans text-[13px] font-normal uppercase tracking-[0.18em] text-blue_tenda-500', value: propOrDefault( props.attributes.tenda_heading, 'tenda_heading' ), onChange: function(val) { setAttributes( {tenda_heading: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('nav', { className: 'footer-menu flex flex-col items-center gap-3', 'aria-label': 'Tenda 21 footer menu' }, [' ', el('a', { href: '#about', className: 'font-sans text-sm font-light text-blue_tenda-500 transition-colors duration-300 hover:text-caramelo_tenda-500' }, ' About Us '), ' ', el('a', { href: 'facilitators.html', className: 'font-sans text-sm font-light text-blue_tenda-500 transition-colors duration-300 hover:text-caramelo_tenda-500' }, ' Facilitators '), ' ', el('a', { href: 'mailto:hello@tenda21.com', className: 'font-sans text-sm font-light text-blue_tenda-500 transition-colors duration-300 hover:text-caramelo_tenda-500' }, ' Contact Us '), ' ']), ' ']), ' ', ' ', el('div', { className: 'flex flex-col items-center' }, [' ', el(RichText, { tagName: 'h2', className: 'mb-5 font-sans text-[13px] font-normal uppercase tracking-[0.18em] text-blue_tenda-500', value: propOrDefault( props.attributes.community_heading, 'community_heading' ), onChange: function(val) { setAttributes( {community_heading: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('nav', { className: 'footer-menu flex flex-col items-center gap-3', 'aria-label': 'Community footer menu' }, [' ', el('a', { href: '#guidelines', className: 'font-sans text-sm font-light text-blue_tenda-500 transition-colors duration-300 hover:text-caramelo_tenda-500' }, ' Community Guidelines '), ' ', el('a', { href: '#policy', className: 'font-sans text-sm font-light text-blue_tenda-500 transition-colors duration-300 hover:text-caramelo_tenda-500' }, ' Cancellation Policy '), ' ', el('a', { href: '#events', className: 'font-sans text-sm font-light text-blue_tenda-500 transition-colors duration-300 hover:text-caramelo_tenda-500' }, ' Upcoming Events '), ' ']), ' ']), ' ', ' ', el('div', { className: 'flex flex-col items-center' }, [' ', el(RichText, { tagName: 'h2', className: 'mb-5 font-sans text-[13px] font-normal uppercase tracking-[0.18em] text-blue_tenda-500', value: propOrDefault( props.attributes.visit_heading, 'visit_heading' ), onChange: function(val) { setAttributes( {visit_heading: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ', el('nav', { className: 'footer-menu flex flex-col items-center gap-3', 'aria-label': 'Visit us footer menu' }, [' ', el('a', { href: 'experiences.html', className: 'font-sans text-sm font-light text-blue_tenda-500 transition-colors duration-300 hover:text-caramelo_tenda-500' }, ' All Experiences '), ' ', el('a', { href: '#retreats', className: 'font-sans text-sm font-light text-blue_tenda-500 transition-colors duration-300 hover:text-caramelo_tenda-500' }, ' Retreats '), ' ', el('a', { href: '#accommodation', className: 'font-sans text-sm font-light text-blue_tenda-500 transition-colors duration-300 hover:text-caramelo_tenda-500' }, ' Accommodation '), ' ']), ' ']), ' ']), ' ', el('div', { className: 'border-t border-blue_tenda-500/10 py-6' }, [' ', el('p', { className: 'text-center font-sans text-[11px] font-light uppercase tracking-[0.18em] text-caramelo_tenda-500' }, [' ', el('span', {}, 'Tenda 21'), ' · All rights reserved · ', el('span', {}, '2026'), ' ']), ' ']), ' ']), ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    el(TextControl, {
                                        value: props.attributes.connect_heading,
                                        help: __( '' ),
                                        label: __( 'Connect heading' ),
                                        onChange: function(val) { setAttributes({connect_heading: val}) },
                                        type: 'text'
                                    }),
                                    pgGetFeature5("pgUrlControl")('instagram_link', setAttributes, props, 'Instagram link', '', null ),
                                    el(TextControl, {
                                        value: props.attributes.instagram_label,
                                        help: __( '' ),
                                        label: __( 'Instagram label' ),
                                        onChange: function(val) { setAttributes({instagram_label: val}) },
                                        type: 'text'
                                    }),
                                    pgGetFeature5("pgUrlControl")('whatsapp_link', setAttributes, props, 'WhatsApp link', '', null ),
                                    el(TextControl, {
                                        value: props.attributes.whatsapp_label,
                                        help: __( '' ),
                                        label: __( 'WhatsApp label' ),
                                        onChange: function(val) { setAttributes({whatsapp_label: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.tenda_heading,
                                        help: __( '' ),
                                        label: __( 'Tenda 21 heading' ),
                                        onChange: function(val) { setAttributes({tenda_heading: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.community_heading,
                                        help: __( '' ),
                                        label: __( 'Community heading' ),
                                        onChange: function(val) { setAttributes({community_heading: val}) },
                                        type: 'text'
                                    }),
                                    el(TextControl, {
                                        value: props.attributes.visit_heading,
                                        help: __( '' ),
                                        label: __( 'Visit us heading' ),
                                        onChange: function(val) { setAttributes({visit_heading: val}) },
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

    block = registerBlockType( 'tenda21/site-footer', blockSettings );
} )(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor
);                        
