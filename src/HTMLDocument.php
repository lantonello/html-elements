<?php
namespace Stigma\HTMLElements;

use Stigma\HTMLElements\Head;
use Stigma\HTMLElements\Body;

class HTMLDocument
{
    // PROPERTIES ==============================================================
    /** @var string Specifies the document language. */
    public $lang;
    /** @var string Holds the content type of document. */
    public $contentType;
    /** @var string Holds the document type. */
    public $doctype;
    /** @var Head Reference to Head element. */
    public $head;
    /** @var Body Reference to Body element. */
    public $body;
    
    // CONSTRUCTOR =============================================================
    /**
     * Creates a new Html Document.
     * @param string $title Document title.
     * @param string $contentType
     */
    public function __construct( string $title, string $lang = 'en', string $contentType = self::CT_USER_DEFINED )
    {
        $this->doctype      = self::DOCT_HTML5;
        $this->lang         = $lang;
        $this->contentType  = $contentType;
        
        // Starts the Head section
        $this->head = new Head();
        $this->head->setTitle( $title );
        
        // Starts the Body section
        $this->body = new Body();
    }
    
    // OVERRIDES ==============================================================
    /**
     * Returns the string representation of this HTMLElement.
     * @return string
     */
    public function __toString()
    {
        return $this->toString();
    }
    
    // PUBLIC METHODS ==========================================================
    /**
     * Returns the string representation of this HTMLElement.
     * @return string
     */
    public function toString()
    {
        // Starts the Html page with DocType declaration
        $html = $this->doctype . PHP_EOL;
        
        // Now, the root tag
        $html .= '<html lang="'. $this->lang .'">' . PHP_EOL;
        
        // The Head section
        $html .= $this->head()->toString();
        
        // The Body section
        $html .= $this->body()->toString();
        
        // Close root tag
        $html .= '</html>';
        
        return $html;
    }
    
    /**
     * Returns the Head element.
     * @param array $attrs
     * @return Head
     */
    public function head( array $attrs = null )
    {
        if( is_null($this->head) )
            $this->head = new Head( $attrs );
        
        return $this->head;
    }
    
    /**
     * Returns the Body element.
     * @param array $attrs
     * @return Body
     */
    public function body( array $attrs = null )
    {
        if( is_null($this->body) )
            $this->body = new Body( $attrs );
        
        return $this->body;
    }
    
    // CONSTANTS ===============================================================
    // Most commom ContentType
    const CT_CROSSWORD                                           = 'application/vnd.hzn-3d-crossword';
    const CT_3GP                                                 = 'video/3gpp';
    const CT_3GP2                                                = 'video/3gpp2';
    const CT_3GPP_MSEQ                                           = 'application/vnd.mseq';
    const CT_BW_LARGE                                            = 'application/vnd.3gpp.pic-bw-large';
    const CT_BW_SMALL                                            = 'application/vnd.3gpp.pic-bw-small';
    const CT_BW_VAR                                              = 'application/vnd.3gpp.pic-bw-var';
    const CT_3GPP2_TCAP                                          = 'application/vnd.3gpp2.tcap';
    const CT_7_ZIP                                               = 'application/x-7z-compressed';
    const CT_ACE                                                 = 'application/x-ace-compressed';
    const CT_ACC                                                 = 'application/vnd.americandynamics.acc';
    const CT_ADPCM                                               = 'audio/adpcm';
    const CT_ADOBE_AUTHORWARE_BINARY                             = 'application/x-authorware-bin';
    const CT_ADOBE_AUTHORWARE_MAP                                = 'application/x-authorware-map';
    const CT_ADOBE_AUTHORWARE_SEGMENT                            = 'application/x-authorware-seg';
    const CT_ADOBE_AIR_APPLICATION                               = 'application/vnd.adobe.air-application-installer-package+zip';
    const CT_ADOBE_FLASH                                         = 'application/x-shockwave-flash';
    const CT_ADOBE_FLEX_PROJECT                                  = 'application/vnd.adobe.fxp';
    const CT_ADOBE_PDF                                           = 'application/pdf';
    const CT_ADOBE_POSTSCRIPT                                    = 'application/vnd.cups-ppd';
    const CT_ADOBE_SHOCKWAVE_PLAYER                              = 'application/x-director';
    const CT_ADOBE_XML                                           = 'application/vnd.adobe.xdp+xml';
    const CT_ADOBE_XML_FORMS                                     = 'application/vnd.adobe.xfdf';
    const CT_ADVANCED_AUDIO_CODING                               = 'audio/x-aac';
    const CT_AMAZON_KINDLE_EBOOK                                 = 'application/vnd.amazon.ebook';
    const CT_ANDROID_PACKAGE                                     = 'application/vnd.android.package-archive';
    const CT_ANSER_WEB_CERTIFICATE_ISSUE                         = 'application/vnd.anser-web-certificate-issue-initiation';
    const CT_ANSER_WEB_FUNDS_TRANSFER                            = 'application/vnd.anser-web-funds-transfer-initiation';
    const CT_APPLE_INSTALLER                                     = 'application/vnd.apple.installer+xml';
    const CT_ASSEMBLER                                           = 'text/x-asm';
    const CT_ATOM_PUBLISHING_PROTOCOL                            = 'application/atomcat+xml';
    const CT_ATOM_SERVICE_DOCUMENT                               = 'application/atomsvc+xml';
    const CT_ATOM_SYNDICATION_FORMAT                             = 'application/atom+xml';
    const CT_AUDIO_INTERCHANGE_FILE_FORMAT                       = 'audio/x-aiff';
    const CT_AUDIO_VIDEO_INTERLEAVE                              = 'video/x-msvideo';
    const CT_AUDIOGRAPH                                          = 'application/vnd.audiograph';
    const CT_AUTOCAD_DXF                                         = 'image/vnd.dxf';
    const CT_AUTODESK_DESIGN_WEB_FORMAT                          = 'model/vnd.dwf';
    const CT_BAS_FORMAT                                          = 'text/plain-bas';
    const CT_BINARY_DATA                                         = 'application/octet-stream';
    const CT_BITMAP_IMAGE_FILE                                   = 'image/bmp';
    const CT_BITTORRENT                                          = 'application/x-bittorrent';
    const CT_BMI_DRAWING_DATA_INTERCHANGE                        = 'application/vnd.bmi';
    const CT_BOURNE_SHELL_SCRIPT                                 = 'application/x-sh';
    const CT_BZIP_ARCHIVE                                        = 'application/x-bzip';
    const CT_BZIP2_ARCHIVE                                       = 'application/x-bzip2';
    const CT_C_SHELL_SCRIPT                                      = 'application/x-csh';
    const CT_C_SOURCE_FILE                                       = 'text/x-c';
    const CT_CASCADING_STYLE_SHEETS                              = 'text/css';
    const CT_COLLADA                                             = 'model/vnd.collada+xml';
    const CT_COMMA_SEPERATED_VALUES                              = 'text/csv';
    const CT_COMPILED_WIRELESS_MARKUP_LANGUAGE                   = 'application/vnd.wap.wmlc';
    const CT_COMPUTER_GRAPHICS_METAFILE                          = 'image/cgm';
    const CT_COREL_METAFILE_EXCHANGE                             = 'image/x-cmx';
    const CT_CORELXARA                                           = 'application/vnd.xara';
    const CT_CURL_APPLET                                         = 'text/vnd.curl';
    const CT_DEBIAN_PACKAGE                                      = 'application/x-debian-package';
    const CT_DEVICE_INDEPENDENT_FILE_FORMAT                      = 'application/x-dvi';
    const CT_DOCUMENT_TYPE_DEFINITION                            = 'application/xml-dtd';
    const CT_DTS_AUDIO                                           = 'audio/vnd.dts';
    const CT_DTS_HD_AUDIO                                        = 'audio/vnd.dts.hd';
    const CT_DWG_DRAWING                                         = 'image/vnd.dwg';
    const CT_ECMASCRIPT                                          = 'application/ecmascript';
    const CT_EFFICIENT_XML_INTERCHANGE                           = 'application/exi';
    const CT_ELECTRONIC_PUBLICATION                              = 'application/epub+zip';
    const CT_EMAIL_MESSAGE                                       = 'message/rfc822';
    const CT_EXTENDED_IMAGE_FILE_FORMAT                          = 'image/vnd.xiff';
    const CT_EXTENSIBLE_FORMS_DESCRIPTION_LANGUAGE               = 'application/vnd.xfdl';
    const CT_EXTENSIBLE_MULTIMODAL_ANNOTATION                    = 'application/emma+xml';
    const CT_FLASH_VIDEO_F4V                                     = 'video/x-f4v';
    const CT_FLASH_VIDEO_FLV                                     = 'video/x-flv';
    const CT_FORMS_DATA_FORMAT                                   = 'application/vnd.fdf';
    const CT_FORTRAN_SOURCE                                      = 'text/x-fortran';
    const CT_FREEHAND_MX                                         = 'image/x-freehand';
    const CT_G3_FAX_IMAGE                                        = 'image/g3fax';
    const CT_GAMEMAKER_ACTIVEX                                   = 'application/vnd.gmx';
    const CT_GEOMETRIC_DESCRIPTION_LANGUAGE                      = 'model/vnd.gdl';
    const CT_GEOPLANW                                            = 'application/vnd.geoplan';
    const CT_GEOSPACW                                            = 'application/vnd.geospace';
    const CT_GHOSTSCRIPT_FONT                                    = 'application/x-font-ghostscript';
    const CT_GLYPH_BITMAP_DISTRIBUTION_FORMAT                    = 'application/x-font-bdf';
    const CT_GNU_TAR_FILES                                       = 'application/x-gtar';
    const CT_GNU_TEXINFO_DOCUMENT                                = 'application/x-texinfo';
    const CT_GOOGLE_EARTH_KML                                    = 'application/vnd.google-earth.kml+xml';
    const CT_GOOGLE_EARTH_ZIPPED_KML                             = 'application/vnd.google-earth.kmz';
    const CT_GRAPHICS_INTERCHANGE_FORMAT                         = 'image/gif';
    const CT_GRAPHVIZ                                            = 'text/vnd.graphviz';
    const CT_H_261                                               = 'video/h261';
    const CT_H_263                                               = 'video/h263';
    const CT_H_264                                               = 'video/h264';
    const CT_HYPERTEXT_APPLICATION_LANGUAGE                      = 'application/vnd.hal+xml';
    const CT_HYPERTEXT_MARKUP_LANGUAGE                           = 'text/html';
    const CT_ICALENDAR                                           = 'text/calendar';
    const CT_ICC_PROFILE                                         = 'application/vnd.iccprofile';
    const CT_ICON_IMAGE                                          = 'image/x-icon';
    const CT_IMAGE_EXCHANGE_FORMAT                               = 'image/ief';
    const CT_J2ME_APP_DESCRIPTOR                                 = 'text/vnd.sun.j2me.app-descriptor';
    const CT_JAVA_ARCHIVE                                        = 'application/java-archive';
    const CT_JAVA_BYTECODE_FILE                                  = 'application/java-vm';
    const CT_JAVA_NETWORK_LAUNCHING_PROTOCOL                     = 'application/x-java-jnlp-file';
    const CT_JAVA_SERIALIZED_OBJECT                              = 'application/java-serialized-object';
    const CT_JAVA_SOURCE_FILE                                    = 'text/x-java-source,java';
    const CT_JAVASCRIPT                                          = 'application/javascript';
    const CT_JAVASCRIPT_OBJECT_NOTATION                          = 'application/json';
    const CT_JPEG_2000_COMPOUND_IMAGE                            = 'video/jpm';
    const CT_JPEG_IMAGE                                          = 'image/jpeg';
    const CT_JPEG_IMAGE_CITRIX_CLIENT                            = 'image/x-citrix-jpeg';
    const CT_JPEG_IMAGE_PROGRESSIVE                              = 'image/pjpeg';
    const CT_JPGVIDEO                                            = 'video/jpeg';
    const CT_KDE_KOFFICE_OFFICE_SUITE_KARBON                     = 'application/vnd.kde.karbon';
    const CT_KDE_KOFFICE_OFFICE_SUITE_KCHART                     = 'application/vnd.kde.kchart';
    const CT_KDE_KOFFICE_OFFICE_SUITE_KFORMULA                   = 'application/vnd.kde.kformula';
    const CT_KDE_KOFFICE_OFFICE_SUITE_KIVIO                      = 'application/vnd.kde.kivio';
    const CT_KDE_KOFFICE_OFFICE_SUITE_KONTOUR                    = 'application/vnd.kde.kontour';
    const CT_KDE_KOFFICE_OFFICE_SUITE_KPRESENTER                 = 'application/vnd.kde.kpresenter';
    const CT_KDE_KOFFICE_OFFICE_SUITE_KSPREAD                    = 'application/vnd.kde.kspread';
    const CT_KDE_KOFFICE_OFFICE_SUITE_KWORD                      = 'application/vnd.kde.kword';
    const CT_LATEX                                               = 'application/x-latex';
    const CT_M3U_MULTIMEDIA_PLAYLIST                             = 'audio/x-mpegurl';
    const CT_M4V                                                 = 'video/x-m4v';
    const CT_MATHEMATICA_NOTEBOOK_PLAYER                         = 'application/vnd.wolfram.player';
    const CT_MATHEMATICA_NOTEBOOKS                               = 'application/mathematica';
    const CT_MATHEMATICAL_MARKUP_LANGUAGE                        = 'application/mathml+xml';
    const CT_MESH_DATA_TYPE                                      = 'model/mesh';
    const CT_MICROSOFT_ACCESS                                    = 'application/x-msaccess';
    const CT_MICROSOFT_ADVANCED_SYSTEMS_FORMAT                   = 'video/x-ms-asf';
    const CT_MICROSOFT_APPLICATION                               = 'application/x-msdownload';
    const CT_MICROSOFT_ARTGALRY                                  = 'application/vnd.ms-artgalry';
    const CT_MICROSOFT_CABINET_FILE                              = 'application/vnd.ms-cab-compressed';
    const CT_MICROSOFT_CLASS_SERVER                              = 'application/vnd.ms-ims';
    const CT_MICROSOFT_CLICKONCE                                 = 'application/x-ms-application';
    const CT_MICROSOFT_CLIPBOARD_CLIP                            = 'application/x-msclip';
    const CT_MICROSOFT_DOCUMENT_IMAGING_FORMAT                   = 'image/vnd.ms-modi';
    const CT_MICROSOFT_EMBEDDED_OPENTYPE                         = 'application/vnd.ms-fontobject';
    const CT_MICROSOFT_EXCEL                                     = 'application/vnd.ms-excel';
    const CT_MICROSOFT_HTML_HELP_FILE                            = 'application/vnd.ms-htmlhelp';
    const CT_MICROSOFT_INFORMATION_CARD                          = 'application/x-mscardfile';
    const CT_MICROSOFT_MEDIAVIEW                                 = 'application/x-msmediaview';
    const CT_MICROSOFT_MONEY                                     = 'application/x-msmoney';
    const CT_MICROSOFT_OFFICE_OOXML_PRESENTATION                 = 'application/vnd.openxmlformats-officedocument.presentationml.presentation';
    const CT_MICROSOFT_OFFICE_OOXML_PRESENTATION_SLIDE           = 'application/vnd.openxmlformats-officedocument.presentationml.slide';
    const CT_MICROSOFT_OFFICE_OOXML_PRESENTATION_SLIDESHOW       = 'application/vnd.openxmlformats-officedocument.presentationml.slideshow';
    const CT_MICROSOFT_OFFICE_OOXML_PRESENTATION_TEMPLATE        = 'application/vnd.openxmlformats-officedocument.presentationml.template';
    const CT_MICROSOFT_OFFICE_OOXML_SPREADSHEET                  = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';
    const CT_MICROSOFT_OFFICE_OOXML_SPREADSHEET_TEMPLATE         = 'application/vnd.openxmlformats-officedocument.spreadsheetml.template';
    const CT_MICROSOFT_OFFICE_OOXML_WORD_DOCUMENT                = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document';
    const CT_MICROSOFT_OFFICE_OOXML_WORD_DOCUMENT_TEMPLATE       = 'application/vnd.openxmlformats-officedocument.wordprocessingml.template';
    const CT_MICROSOFT_OFFICE_BINDER                             = 'application/x-msbinder';
    const CT_MICROSOFT_OFFICE_SYSTEM_RELEASE_THEME               = 'application/vnd.ms-officetheme';
    const CT_MICROSOFT_ONENOTE                                   = 'application/onenote';
    const CT_MICROSOFT_PLAYREADY_ECOSYSTEM                       = 'audio/vnd.ms-playready.media.pya';
    const CT_MICROSOFT_PLAYREADY_ECOSYSTEM_VIDEO                 = 'video/vnd.ms-playready.media.pyv';
    const CT_MICROSOFT_POWERPOINT                                = 'application/vnd.ms-powerpoint';
    const CT_MICROSOFT_POWERPOINT_ADDIN_FILE                     = 'application/vnd.ms-powerpoint.addin.macroenabled.12';
    const CT_MICROSOFT_POWERPOINT_MACROENABLED_OPEN_XML_SLIDE    = 'application/vnd.ms-powerpoint.slide.macroenabled.12';
    const CT_MICROSOFT_POWERPOINT_MACROENABLED_PRESENTATION_FILE = 'application/vnd.ms-powerpoint.presentation.macroenabled.12';
    const CT_MICROSOFT_POWERPOINT_MACROENABLED_SLIDESHOW_FILE    = 'application/vnd.ms-powerpoint.slideshow.macroenabled.12';
    const CT_MICROSOFT_POWERPOINT_MACROENABLED_TEMPLATE_FILE     = 'application/vnd.ms-powerpoint.template.macroenabled.12';
    const CT_MICROSOFT_PROJECT                                   = 'application/vnd.ms-project';
    const CT_MICROSOFT_PUBLISHER                                 = 'application/x-mspublisher';
    const CT_MICROSOFT_SCHEDULE                                  = 'application/x-msschedule';
    const CT_MICROSOFT_SILVERLIGHT                               = 'application/x-silverlight-app';
    const CT_MICROSOFT_VISIO                                     = 'application/vnd.visio';
    const CT_MICROSOFT_VISIO_2013                                = 'application/vnd.visio2013';
    const CT_MICROSOFT_WINDOWS_MEDIA                             = 'video/x-ms-wm';
    const CT_MICROSOFT_WINDOWS_MEDIA_AUDIO                       = 'audio/x-ms-wma';
    const CT_MICROSOFT_WINDOWS_MEDIA_AUDIO_REDIRECTOR            = 'audio/x-ms-wax';
    const CT_MICROSOFT_WINDOWS_MEDIA_PLAYLIST                    = 'video/x-ms-wmx';
    const CT_MICROSOFT_WINDOWS_MEDIA_PLAYER_PACKAGE              = 'application/x-ms-wmd';
    const CT_MICROSOFT_WINDOWS_MEDIA_PLAYER_PLAYLIST             = 'application/vnd.ms-wpl';
    const CT_MICROSOFT_WINDOWS_MEDIA_PLAYER_SKIN                 = 'application/x-ms-wmz';
    const CT_MICROSOFT_WINDOWS_MEDIA_VIDEO                       = 'video/x-ms-wmv';
    const CT_MICROSOFT_WINDOWS_MEDIA_VIDEO_PLAYLIST              = 'video/x-ms-wvx';
    const CT_MICROSOFT_WINDOWS_METAFILE                          = 'application/x-msmetafile';
    const CT_MICROSOFT_WINDOWS_TERMINAL_SERVICES                 = 'application/x-msterminal';
    const CT_MICROSOFT_WORD                                      = 'application/msword';
    const CT_MICROSOFT_WORD_MACROENABLED_DOCUMENT                = 'application/vnd.ms-word.document.macroenabled.12';
    const CT_MICROSOFT_WORD_MACROENABLED_TEMPLATE                = 'application/vnd.ms-word.template.macroenabled.12';
    const CT_MICROSOFT_WORDPAD                                   = 'application/x-mswrite';
    const CT_MICROSOFT_WORKS                                     = 'application/vnd.ms-works';
    const CT_MICROSOFT_XAML_BROWSER_APPLICATION                  = 'application/x-ms-xbap';
    const CT_MICROSOFT_XML_PAPER_SPECIFICATION                   = 'application/vnd.ms-xpsdocument';
    const CT_MIDI_MUSICAL_INSTRUMENT_DIGITAL_INTERFACE           = 'audio/midi';
    const CT_MOBILE_INFORMATION_DEVICE_PROFILE                   = 'application/vnd.jcp.javame.midlet-rms';
    const CT_MOBILETV                                            = 'application/vnd.tmobile-livetv';
    const CT_MOBIPOCKET                                          = 'application/x-mobipocket-ebook';
    const CT_MOTION_JPEG_2000                                    = 'video/mj2';
    const CT_MPEG_AUDIO                                          = 'audio/mpeg';
    const CT_MPEG_URL                                            = 'video/vnd.mpegurl';
    const CT_MPEG_VIDEO                                          = 'video/mpeg';
    const CT_MPEG_21                                             = 'application/mp21';
    const CT_MPEG_4_AUDIO                                        = 'audio/mp4';
    const CT_MPEG_4_VIDEO                                        = 'video/mp4';
    const CT_MPEG4                                               = 'application/mp4';
    const CT_MULTIMEDIA_PLAYLIST_UNICODE                         = 'application/vnd.apple.mpegurl';
    const CT_MXML                                                = 'application/xv+xml';
    const CT_NOTATION3                                           = 'text/n3';
    const CT_OFFICE_DOCUMENT_ARCHITECTURE                        = 'application/oda';
    const CT_OGG                                                 = 'application/ogg';
    const CT_OGG_AUDIO                                           = 'audio/ogg';
    const CT_OGG_VIDEO                                           = 'video/ogg';
    const CT_OPEN_DOCUMENT_TEXT_WEB                              = 'application/vnd.oasis.opendocument.text-web';
    const CT_OPEN_EBOOK_PUBLICATION_STRUCTURE                    = 'application/oebps-package+xml';
    const CT_OPEN_FINANCIAL_EXCHANGE                             = 'application/vnd.intu.qbo';
    const CT_OPEN_OFFICE_EXTENSION                               = 'application/vnd.openofficeorg.extension';
    const CT_OPEN_SCORE_FORMAT                                   = 'application/vnd.yamaha.openscoreformat';
    const CT_OPEN_WEB_MEDIA_PROJECT_AUDIO                        = 'audio/webm';
    const CT_OPEN_WEB_MEDIA_PROJECT_VIDEO                        = 'video/webm';
    const CT_OPENDOCUMENT_CHART                                  = 'application/vnd.oasis.opendocument.chart';
    const CT_OPENDOCUMENT_CHART_TEMPLATE                         = 'application/vnd.oasis.opendocument.chart-template';
    const CT_OPENDOCUMENT_DATABASE                               = 'application/vnd.oasis.opendocument.database';
    const CT_OPENDOCUMENT_FORMULA                                = 'application/vnd.oasis.opendocument.formula';
    const CT_OPENDOCUMENT_FORMULA_TEMPLATE                       = 'application/vnd.oasis.opendocument.formula-template';
    const CT_OPENDOCUMENT_GRAPHICS                               = 'application/vnd.oasis.opendocument.graphics';
    const CT_OPENDOCUMENT_GRAPHICS_TEMPLATE                      = 'application/vnd.oasis.opendocument.graphics-template';
    const CT_OPENDOCUMENT_IMAGE                                  = 'application/vnd.oasis.opendocument.image';
    const CT_OPENDOCUMENT_IMAGE_TEMPLATE                         = 'application/vnd.oasis.opendocument.image-template';
    const CT_OPENDOCUMENT_PRESENTATION                           = 'application/vnd.oasis.opendocument.presentation';
    const CT_OPENDOCUMENT_PRESENTATION_TEMPLATE                  = 'application/vnd.oasis.opendocument.presentation-template';
    const CT_OPENDOCUMENT_SPREADSHEET                            = 'application/vnd.oasis.opendocument.spreadsheet';
    const CT_OPENDOCUMENT_SPREADSHEET_TEMPLATE                   = 'application/vnd.oasis.opendocument.spreadsheet-template';
    const CT_OPENDOCUMENT_TEXT                                   = 'application/vnd.oasis.opendocument.text';
    const CT_OPENDOCUMENT_TEXT_MASTER                            = 'application/vnd.oasis.opendocument.text-master';
    const CT_OPENDOCUMENT_TEXT_TEMPLATE                          = 'application/vnd.oasis.opendocument.text-template';
    const CT_OPENGL_TEXTURES                                     = 'image/ktx';
    const CT_OPENOFFICE_CALC                                     = 'application/vnd.sun.xml.calc';
    const CT_OPENOFFICE_CALC_TEMPLATE                            = 'application/vnd.sun.xml.calc.template';
    const CT_OPENOFFICE_DRAW                                     = 'application/vnd.sun.xml.draw';
    const CT_OPENOFFICE_DRAW_TEMPLATE                            = 'application/vnd.sun.xml.draw.template';
    const CT_OPENOFFICE_IMPRESS                                  = 'application/vnd.sun.xml.impress';
    const CT_OPENOFFICE_IMPRESS_TEMPLATE                         = 'application/vnd.sun.xml.impress.template';
    const CT_OPENOFFICE_MATH                                     = 'application/vnd.sun.xml.math';
    const CT_OPENOFFICE_WRITER                                   = 'application/vnd.sun.xml.writer';
    const CT_OPENOFFICE_WRITER_GLOBAL                            = 'application/vnd.sun.xml.writer.global';
    const CT_OPENOFFICE_WRITER_TEMPLATE                          = 'application/vnd.sun.xml.writer.template';
    const CT_OPENTYPE_FONT_FILE                                  = 'application/x-font-otf';
    const CT_OSGI_DEPLOYMENT_PACKAGE                             = 'application/vnd.osgi.dp';
    const CT_PASCAL_SOURCE_FILE                                  = 'text/x-pascal';
    const CT_PCX_IMAGE                                           = 'image/x-pcx';
    const CT_PHOTOSHOP_DOCUMENT                                  = 'image/vnd.adobe.photoshop';
    const CT_PICT_IMAGE                                          = 'image/x-pict';
    const CT_PORTABLE_ANYMAP_IMAGE                               = 'image/x-portable-anymap';
    const CT_PORTABLE_BITMAP_FORMAT                              = 'image/x-portable-bitmap';
    const CT_PORTABLE_COMPILED_FORMAT                            = 'application/x-font-pcf';
    const CT_PORTABLE_FONT_RESOURCE                              = 'application/font-tdpfr';
    const CT_PORTABLE_GRAYMAP_FORMAT                             = 'image/x-portable-graymap';
    const CT_PORTABLE_NETWORK_GRAPHICS                           = 'image/png';
    const CT_PORTABLE_NETWORK_GRAPHICS_CITRIX                    = 'image/x-citrix-png';
    const CT_PORTABLE_NETWORK_GRAPHICS_X_TOKEN                   = 'image/x-png';
    const CT_PORTABLE_PIXMAP_FORMAT                              = 'image/x-portable-pixmap';
    const CT_PORTABLE_SYMMETRIC_KEY_CONTAINER                    = 'application/pskc+xml';
    const CT_POSTSCRIPT                                          = 'application/postscript';
    const CT_POSTSCRIPT_FONTS                                    = 'application/x-font-type1';
    const CT_PSF_FONTS                                           = 'application/x-font-linux-psf';
    const CT_QUICKTIME_VIDEO                                     = 'video/quicktime';
    const CT_RAR_ARCHIVE                                         = 'application/x-rar-compressed';
    const CT_REAL_AUDIO_SOUND                                    = 'audio/x-pn-realaudio';
    const CT_REAL_AUDIO_PLUGIN                                   = 'audio/x-pn-realaudio-plugin';
    const CT_REALMEDIA                                           = 'application/vnd.rn-realmedia';
    const CT_REALVNC                                             = 'application/vnd.realvnc.bed';
    const CT_RICH_TEXT_FORMAT                                    = 'application/rtf';
    const CT_RICH_TEXT_FORMAT_RTF                                = 'text/richtext';
    const CT__REALLY_SIMPLE_SYNDICATION                          = 'application/rss+xml';
    const CT_SCALABLE_VECTOR_GRAPHICS                            = 'image/svg+xml';
    const CT_SECURED_EMAIL_MA                                    = 'application/vnd.sema';
    const CT_SECURED_EMAIL_MD                                    = 'application/vnd.semd';
    const CT_SECURED_EMAIL_MF                                    = 'application/vnd.semf';
    const CT_SEEMAIL                                             = 'application/vnd.seemail';
    const CT_SERVER_NORMAL_FORMAT                                = 'application/x-font-snf';
    const CT_SCVP_VALIDATION_POLICIES_REQUEST                    = 'application/scvp-vp-request';
    const CT_SCVP_VALIDATION_POLICIES_RESPONSE                   = 'application/scvp-vp-response';
    const CT_SCVP_VALIDATION_REQUEST                             = 'application/scvp-cv-request';
    const CT_SCVP_VALIDATION_RESPONSE                            = 'application/scvp-cv-response';
    const CT_SGI_MOVIE                                           = 'video/x-sgi-movie';
    const CT_SHELL_ARCHIVE                                       = 'application/x-shar';
    const CT_SILICON_GRAPHICS_RGB_BITMAP                         = 'image/x-rgb';
    const CT_SOURCEVIEW_DOCUMENT                                 = 'application/vnd.svd';
    const CT_SPEECH_RECOGNITION_GRAMMAR_SPECIFICATION            = 'application/srgs';
    const CT_SPEECH_RECOGNITION_GRAMMAR_SPECIFICATION_XML        = 'application/srgs+xml';
    const CT_SPEECH_SYNTHESIS_MARKUP_LANGUAGE                    = 'application/ssml+xml';
    const CT_STANDARD_GENERALIZED_MARKUP_LANGUAGE                = 'text/sgml ';
    const CT_STAROFFICE_CALC                                     = 'application/vnd.stardivision.calc';
    const CT_STAROFFICE_DRAW                                     = 'application/vnd.stardivision.draw';
    const CT_STAROFFICE_IMPRESS                                  = 'application/vnd.stardivision.impress';
    const CT_STAROFFICE_MATH                                     = 'application/vnd.stardivision.math';
    const CT_STAROFFICE_WRITER                                   = 'application/vnd.stardivision.writer';
    const CT_STAROFFICE_WRITER_GLOBAL                            = 'application/vnd.stardivision.writer-global';
    const CT_SUN_AUDIO_FILE_FORMAT                               = 'audio/basic';
    const CT_SYNCHRONIZED_MULTIMEDIA_INTEGRATION_LANGUAGE        = 'application/smil+xml';
    const CT_SYNCML                                              = 'application/vnd.syncml+xml';
    const CT_SYSTEMS_BIOLOGY_MARKUP_LANGUAGE                     = 'application/sbml+xml';
    const CT_TAB_SEPERATED_VALUES                                = 'text/tab-separated-values';
    const CT_TAGGED_IMAGE_FILE_FORMAT                            = 'image/tiff';
    const CT_TAR_FILE                                            = 'application/x-tar';
    const CT_TCL_SCRIPT                                          = 'application/x-tcl';
    const CT_TEX                                                 = 'application/x-tex';
    const CT_TEX_FONT_METRIC                                     = 'application/x-tex-tfm';
    const CT_TEXT_ENCODING_AND_INTERCHANGE                       = 'application/tei+xml';
    const CT_TEXT_FILE                                           = 'text/plain';
    const CT_TRUETYPE_FONT                                       = 'application/x-font-ttf';
    const CT_UNIQUE_OBJECT_MARKUP_LANGUAGE                       = 'application/vnd.uoml+xml';
    const CT_UNITY_3D                                            = 'application/vnd.unity';
    const CT_UNIVERSAL_FORMS_DESCRIPTION_LANGUAGE                = 'application/vnd.ufdl';
    const CT_URI_RESOLUTION_SERVICES                             = 'text/uri-list';
    const CT_UUENCODE                                            = 'text/x-uuencode';
    const CT_VCALENDAR                                           = 'text/x-vcalendar';
    const CT_VCARD                                               = 'text/x-vcard';
    const CT_VIEWPORT_PLUS                                       = 'application/vnd.vsf';
    const CT_VIRTUAL_REALITY_MODELING_LANGUAGE                   = 'model/vrml';
    const CT_VOICEXML                                            = 'application/voicexml+xml';
    const CT_WAVEFORM_AUDIO_FILE_FORMAT                          = 'audio/x-wav';
    const CT_WEB_OPEN_FONT_FORMAT                                = 'application/x-font-woff';
    const CT_WEBP_IMAGE                                          = 'image/webp';
    const CT_WIDGET_PACKAGING_AND_XML_CONFIGURATION              = 'application/widget';
    const CT_WINHELP                                             = 'application/winhlp';
    const CT_WIRELESS_MARKUP_LANGUAGE                            = 'text/vnd.wap.wml';
    const CT_WIRELESS_MARKUP_LANGUAGE_SCRIPT                     = 'text/vnd.wap.wmlscript';
    const CT_WMLSCRIPT                                           = 'application/vnd.wap.wmlscriptc';
    const CT_WEB_SERVICES_DESCRIPTION_LANGUAGE                   = 'application/wsdl+xml';
    const CT_X_BITMAP                                            = 'image/x-xbitmap';
    const CT_X_PIXMAP                                            = 'image/x-xpixmap';
    const CT_X_WINDOW_DUMP                                       = 'image/x-xwindowdump';
    const CT_XFIG                                                = 'application/x-xfig';
    const CT_EXTENSIBLE_HYPERTEXT_MARKUP_LANGUAGE                = 'application/xhtml+xml';
    const CT_EXTENSIBLE_MARKUP_LANGUAGE                          = 'application/xml';
    const CT_XML_CONFIGURATION_ACCESS_PROTOCOL                   = 'application/xcap-diff+xml';
    const CT_XML_ENCRYPTION_SYNTAX_AND_PROCESSING                = 'application/xenc+xml';
    const CT_XML_PATCH_FRAMEWORK                                 = 'application/patch-ops-error+xml';
    const CT_XML_RESOURCE_LISTS                                  = 'application/resource-lists+xml';
    const CT_XML_RESOURCE_LISTS_SERVICES                         = 'application/rls-services+xml';
    const CT_XML_RESOURCE_LISTS_DIFF                             = 'application/resource-lists-diff+xml';
    const CT_XML_TRANSFORMATIONS                                 = 'application/xslt+xml';
    const CT_XML_BINARY_OPTIMIZED_PACKAGING                      = 'application/xop+xml';
    const CT_XPINSTALL_MOZILLA                                   = 'application/x-xpinstall';
    const CT_XML_SHAREABLE_PLAYLIST_FORMAT                       = 'application/xspf+xml';
    const CT_XML_USER_INTERFACE_LANGUAGE                         = 'application/vnd.mozilla.xul+xml';
    const CT_YET_ANOTHER_MARKUP_LANGUAGE                         = 'text/yaml';
    const CT_ZIP_ARCHIVE                                         = 'application/zip';
    const CT_USER_DEFINED                                        = '';
    
    // Doctype contants (current only HTML5 is supported!)
    const DOCT_HTML5               = '<!DOCTYPE html>';
    const DOCT_HTML41_STRICT       = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">';
    const DOCT_HTML41_TRANSITIONAL = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">';
    const DOCT_HTML41_FRAMESET     = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">';
    const DOCT_XHTML1_STRICT       = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">';
    const DOCT_XHTML1_TRANSITIONAL = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
    const DOCT_XHTML1_FRAMESET     = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">';
    const DOCT_XHTML11             = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">';
    const DOCT_XHTML_BASIC_11      = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.1//EN" "http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd">';
    
    const DOCT_MATHML20            = '<!DOCTYPE math PUBLIC "-//W3C//DTD MathML 2.0//EN" "http://www.w3.org/Math/DTD/mathml2/mathml2.dtd">';
    const DOCT_MATHML101           = '<!DOCTYPE math SYSTEM "http://www.w3.org/Math/DTD/mathml1/mathml.dtd">';
    const DOCT_XHTML_MATHML_SVG    = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 plus MathML 2.0 plus SVG 1.1//EN" "http://www.w3.org/2002/04/xhtml-math-svg/xhtml-math-svg.dtd">';
    const DOCT_SVG11               = '<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">';
    const DOCT_SVG_10              = '<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.0//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">';
    const DOCT_SVG11_BASIC         = '<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1 Basic//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11-basic.dtd">';
    const DOCT_SVG11_TINY          = '<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1 Tiny//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11-tiny.dtd">';
    
    const DOCT_HTML20              = '<!DOCTYPE html PUBLIC "-//IETF//DTD HTML 2.0//EN">';
    const DOCT_HTML32              = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">';
    const DOCT_XHTML_BASIC_10      = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.0//EN" "http://www.w3.org/TR/xhtml-basic/xhtml-basic10.dtd">';
}
