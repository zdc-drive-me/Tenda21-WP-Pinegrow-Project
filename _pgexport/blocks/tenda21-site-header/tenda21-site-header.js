
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
            const blockProps = useBlockProps({ className: 'bg-white px-5 relative site-main-nav
 z-30 md:px-8
 lg:px-10
' });
            const setAttributes = props.setAttributes; 
            
            props.logo = useSelect(function( select ) {
                return {
                    logo: props.attributes.logo.id ? select('core').getMedia(props.attributes.logo.id) : undefined
                };
            }, [props.attributes.logo] ).logo;
            

            props.divider_image = useSelect(function( select ) {
                return {
                    divider_image: props.attributes.divider_image.id ? select('core').getMedia(props.attributes.divider_image.id) : undefined
                };
            }, [props.attributes.divider_image] ).divider_image;
            
            
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('header', { ...blockProps }, [' ', ' ', el('div', { className: 'mx-auto max-w-[1600px]' }, [' ', ' ', el('div', { className: 'flex h-[62px] items-center' }, [' ', ' ', ' ', ' ', ' ', el('a', { href: '#', className: 'shrink-0', 'aria-label': 'Tenda 21' }, [' ', ' ', props.attributes.logo && props.attributes.logo.svg && pgGetFeature5("pgCreateSVG")(RawHTML, {}, pgGetFeature5("pgMergeInlineSVGAttributes")(propOrDefault( props.attributes.logo.svg, 'logo', 'svg' ), { className: 'h-[55px] w-[55px] object-contain' })), props.attributes.logo && !props.attributes.logo.svg && propOrDefault( props.attributes.logo.url, 'logo', 'url' ) && el('img', { src: propOrDefault( props.attributes.logo.url, 'logo', 'url' ), alt: propOrDefault( props.attributes.logo?.alt, 'logo', 'alt' ), className: 'h-[55px] object-contain w-[55px] ' + (props.attributes.logo.id ? ('wp-image-' + props.attributes.logo.id) : '') }), ' ', ' ']), ' ', ' ', ' ', ' ', ' ', ' ', el('nav', { className: 'flex-1 hidden text-blue_tenda-600 lg:block', 'aria-label': 'Primary navigation' }, [' ', ' ', el('ul', { className: 'flex font-light font-sans items-center justify-between max-w-[1160px]
 mx-auto px-10 text-[#7899b1]
 text-[11px]
 uppercase' }, [' ', ' ', el('li', {}, [' ', el('a', { href: '#', className: 'transition-opacity hover:opacity-60' }, [' A Tenda', ' ']), ' ']), ' ', ' ', el('li', {}, [' ', el('a', { href: '#', className: 'transition-opacity hover:opacity-60' }, [' Experiências', ' ']), ' ']), ' ', ' ', el('li', {}, [' ', el('a', { href: '#', className: 'transition-opacity hover:opacity-60' }, [' Facilitadores', ' ']), ' ']), ' ', ' ', el('li', {}, [' ', el('a', { href: '#', className: 'transition-opacity hover:opacity-60' }, [' Calendário', ' ']), ' ']), ' ', ' ', el('li', {}, [' ', el('a', { href: '#', className: 'transition-opacity hover:opacity-60' }, [' A Anfitriã', ' ']), ' ']), ' ', ' ', el('li', {}, [' ', el('a', { href: '#', className: 'transition-opacity hover:opacity-60' }, [' Contato', ' ']), ' ']), ' ', ' ']), ' ', ' ']), ' ', ' ', ' ', ' ', ' ', ' ', el('ul', { className: 'font-light font-sans gap-1 hidden items-center ml-auto text-[11px]
 text-blue_tenda-900
 uppercase lg:flex
' }, [' ', ' ', el('li', {}, [' ', el('a', { href: '#' }, [' EN', ' ']), ' ']), ' ', ' ', el('li', { 'aria-hidden': 'true' }, [' -', ' ']), ' ', ' ', el('li', {}, [' ', el('a', { href: '#' }, [' PT', ' ']), ' ']), ' ', ' ']), ' ', ' ', ' ', ' ', ' ', ' ', el('button', { type: 'button', className: 'ml-auto
 flex
 items-center
 gap-3
 font-sans
 text-xs
 uppercase
 tracking-[0.12em]
 text-[#7899b1]
 lg:hidden
', 'data-mobile-menu-toggle': '', 'aria-expanded': 'false', 'aria-controls': 'mobile-menu' }, [' ', ' ', el('span', { 'data-mobile-menu-label': '' }, [' Menu', ' ']), ' ', ' ', ' ', el('span', { className: '
                        relative
                        block
                        h-4
                        w-5
                    ', 'aria-hidden': 'true' }, [' ', ' ', el('span', { className: '
                            absolute
                            left-0
                            top-1
                            block
                            h-px
                            w-full
                            bg-[#7899b1]
                        ', 'data-mobile-menu-line': 'top' }), ' ', ' ', ' ', el('span', { className: '
                            absolute
                            bottom-1
                            left-0
                            block
                            h-px
                            w-full
                            bg-[#7899b1]
                        ', 'data-mobile-menu-line': 'bottom' }), ' ', ' ']), ' ', ' ']), ' ', ' ']), ' ', ' ', ' ', ' ', ' ', ' ', props.attributes.divider_image && props.attributes.divider_image.svg && pgGetFeature5("pgCreateSVG")(RawHTML, {}, pgGetFeature5("pgMergeInlineSVGAttributes")(propOrDefault( props.attributes.divider_image.svg, 'divider_image', 'svg' ), { 'aria-hidden': 'true', className: 'block w-full object-fill', style: { height: '15px' } })), props.attributes.divider_image && !props.attributes.divider_image.svg && propOrDefault( props.attributes.divider_image.url, 'divider_image', 'url' ) && el('img', { src: propOrDefault( props.attributes.divider_image.url, 'divider_image', 'url' ), alt: propOrDefault( props.attributes.divider_image?.alt, 'divider_image', 'alt' ), 'aria-hidden': 'true', className: 'block object-fill w-full ' + (props.attributes.divider_image.id ? ('wp-image-' + props.attributes.divider_image.id) : ''), style: { height: '15px' } }), ' ', ' ', ' ', ' ', ' ', ' ', el('div', { id: 'mobile-menu', className: 'hidden
 lg:hidden
', 'data-mobile-menu': '' }, [' ', ' ', el('nav', { className: 'flex flex-col items-center pb-10 pt-8 px-5 text-center', 'aria-label': 'Mobile navigation' }, [' ', ' ', el('ul', { className: '
                        flex
                        w-full
                        max-w-sm
                        flex-col
                        items-center
                        gap-6
                        font-sans
                        text-sm
                        font-light
                        uppercase
                        tracking-wide
                        text-[#7899b1]
                    ' }, [' ', ' ', el('li', {}, [' ', el('a', { href: '#' }, [' A Tenda', ' ']), ' ']), ' ', ' ', el('li', {}, [' ', el('a', { href: '#' }, [' Experiências', ' ']), ' ']), ' ', ' ', el('li', {}, [' ', el('a', { href: '#' }, [' Facilitadores', ' ']), ' ']), ' ', ' ', el('li', {}, [' ', el('a', { href: '#' }, [' Calendário', ' ']), ' ']), ' ', ' ', el('li', {}, [' ', el('a', { href: '#' }, [' A Anfitriã', ' ']), ' ']), ' ', ' ', el('li', {}, [' ', el('a', { href: '#' }, [' Contato', ' ']), ' ']), ' ', ' ']), ' ', ' ', ' ', ' ', ' ', ' ', el('div', { className: 'mt-8' }, [' ', ' ', el('ul', { className: '
                            flex
                            items-center
                            justify-center
                            gap-1
                            font-sans
                            text-xs
                            font-light
                            uppercase
                            tracking-wide
                            text-[#7899b1]
                        ' }, [' ', ' ', el('li', {}, [' ', el(RichText, { tagName: 'a', href: propOrDefault( props.attributes.language_link_en_mobile.url, 'language_link_en_mobile', 'url' ), onClick: function(e) { e.preventDefault(); }, value: propOrDefault( props.attributes.language_label_en_mobile, 'language_label_en_mobile' ), onChange: function(val) { setAttributes( {language_label_en_mobile: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', ' ', el('li', { 'aria-hidden': 'true' }, [' -', ' ']), ' ', ' ', el('li', {}, [' ', el(RichText, { tagName: 'a', href: propOrDefault( props.attributes.language_link_pt_mobile.url, 'language_link_pt_mobile', 'url' ), onClick: function(e) { e.preventDefault(); }, value: propOrDefault( props.attributes.language_label_pt_mobile, 'language_label_pt_mobile' ), onChange: function(val) { setAttributes( {language_label_pt_mobile: val }) }, withoutInteractiveFormatting: true, allowedFormats: [] }), ' ']), ' ', ' ']), ' ', ' ']), ' ', ' ']), ' ', ' ']), ' ', ' ']), ' ', ' ']),                        
                
                    el( InspectorControls, {},
                        [
                            
                        pgGetFeature5("pgMediaImageControl")('logo', setAttributes, props, 'full', true, 'Logo', '', function(url) { return propOrDefault(url, 'logo', 'url'); } ),
                                        
                        pgGetFeature5("pgMediaImageControl")('divider_image', setAttributes, props, 'full', true, 'Divider image', '', function(url) { return propOrDefault(url, 'divider_image', 'url'); } ),
                                        
                            el(Panel, {},
                                el(PanelBody, {
                                    title: __('Block properties')
                                }, [
                                    
                                    pgGetFeature5("pgUrlControl")('language_link_en_mobile', setAttributes, props, 'Language link EN (mobile)', '', null ),
                                    el(TextControl, {
                                        value: props.attributes.language_label_en_mobile,
                                        help: __( '' ),
                                        label: __( 'Language label EN (mobile)' ),
                                        onChange: function(val) { setAttributes({language_label_en_mobile: val}) },
                                        type: 'text'
                                    }),
                                    pgGetFeature5("pgUrlControl")('language_link_pt_mobile', setAttributes, props, 'Language link PT (mobile)', '', null ),
                                    el(TextControl, {
                                        value: props.attributes.language_label_pt_mobile,
                                        help: __( '' ),
                                        label: __( 'Language label PT (mobile)' ),
                                        onChange: function(val) { setAttributes({language_label_pt_mobile: val}) },
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

    block = registerBlockType( 'tenda21/tenda21-site-header', blockSettings );
} )(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor
);                        
