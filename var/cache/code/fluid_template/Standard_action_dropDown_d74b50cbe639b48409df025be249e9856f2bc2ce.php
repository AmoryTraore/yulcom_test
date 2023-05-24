<?php

class Standard_action_dropDown_d74b50cbe639b48409df025be249e9856f2bc2ce extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};
$arguments1 = [];
$arguments1['pageTitle'] = '';
$arguments1['includeCssFiles'] = NULL;
$arguments1['includeJsFiles'] = NULL;
$arguments1['addJsInlineLabels'] = NULL;
$arguments1['includeRequireJsModules'] = NULL;
$arguments1['addInlineSettings'] = NULL;
// Rendering Array
$array3 = [];
$array3['0'] = 'TYPO3/CMS/Opendocs/Toolbar/OpendocsMenu';
$arguments1['includeRequireJsModules'] = $array3;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '

<h3 class="dropdown-headline">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};
$arguments4 = [];
$arguments4['key'] = NULL;
$arguments4['id'] = NULL;
$arguments4['default'] = NULL;
$arguments4['arguments'] = NULL;
$arguments4['extensionName'] = NULL;
$arguments4['languageKey'] = NULL;
$arguments4['alternativeLanguageKeys'] = NULL;
$arguments4['key'] = 'toolbaritem';
$arguments4['extensionName'] = 'opendocs';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output0 .= '
</h3>
<hr>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
$output46 = '';

$output46 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
$output49 = '';

$output49 .= '
        <p>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
return NULL;
};
$arguments50 = [];
$arguments50['key'] = NULL;
$arguments50['id'] = NULL;
$arguments50['default'] = NULL;
$arguments50['arguments'] = NULL;
$arguments50['extensionName'] = NULL;
$arguments50['languageKey'] = NULL;
$arguments50['alternativeLanguageKeys'] = NULL;
$arguments50['key'] = 'no_docs';
$arguments50['extensionName'] = 'opendocs';

$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output49 .= '
        </p>
    ';
return $output49;
};
$arguments47 = [];

$output46 .= '';

$output46 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
$output54 = '';

$output54 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure56 = function() use ($renderingContext) {
$output59 = '';

$output59 .= '
            <h3 class="dropdown-headline">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure61 = function() use ($renderingContext) {
return NULL;
};
$arguments60 = [];
$arguments60['key'] = NULL;
$arguments60['id'] = NULL;
$arguments60['default'] = NULL;
$arguments60['arguments'] = NULL;
$arguments60['extensionName'] = NULL;
$arguments60['languageKey'] = NULL;
$arguments60['alternativeLanguageKeys'] = NULL;
$arguments60['key'] = 'open_docs';
$arguments60['extensionName'] = 'opendocs';

$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output59 .= '
                <a href="#" class="dropdown-table-actions-btn dropdown-table-actions-btn-close t3js-topbar-opendocs-close float-end"
                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure63 = function() use ($renderingContext) {
return NULL;
};
$arguments62 = [];
$arguments62['key'] = NULL;
$arguments62['id'] = NULL;
$arguments62['default'] = NULL;
$arguments62['arguments'] = NULL;
$arguments62['extensionName'] = NULL;
$arguments62['languageKey'] = NULL;
$arguments62['alternativeLanguageKeys'] = NULL;
$arguments62['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:rm.closeAllDocs';

$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext)]);

$output59 .= '">
                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure65 = function() use ($renderingContext) {
return NULL;
};
$arguments64 = [];
$arguments64['identifier'] = NULL;
$arguments64['size'] = 'small';
$arguments64['overlay'] = NULL;
$arguments64['state'] = 'default';
$arguments64['alternativeMarkupIdentifier'] = NULL;
$arguments64['identifier'] = 'actions-close';
$arguments64['alternativeMarkupIdentifier'] = 'inline';

$output59 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output59 .= '
                </a>
            </h3>
            <div class="dropdown-table">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure67 = function() use ($renderingContext) {
$output68 = '';

$output68 .= '
                    <div class="dropdown-table-row t3js-topbar-opendocs-item">
                        <div class="dropdown-table-column dropdown-table-title">
                            <a class="dropdown-table-title-ellipsis t3js-open-doc" data-pid="';

$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('openDocument.pid')]);

$output68 .= '" href="';

$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('openDocument.uri')]);

$output68 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure70 = function() use ($renderingContext) {
return NULL;
};
$arguments69 = [];
$arguments69['table'] = NULL;
$arguments69['row'] = NULL;
$arguments69['size'] = 'small';
$arguments69['alternativeMarkupIdentifier'] = NULL;
$arguments69['table'] = $renderingContext->getVariableProvider()->getByPath('openDocument.table');
$arguments69['row'] = $renderingContext->getVariableProvider()->getByPath('openDocument.record');

$output68 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output68 .= '
                                ';

$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('openDocument.label')]);

$output68 .= '
                            </a>
                        </div>
                        <div class="dropdown-table-column dropdown-table-actions">
                            <a href="#" class="dropdown-table-actions-btn dropdown-table-actions-btn-close t3js-topbar-opendocs-close"
                                data-opendocsidentifier="';

$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('openDocument.md5sum')]);

$output68 .= '"
                                title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure72 = function() use ($renderingContext) {
return NULL;
};
$arguments71 = [];
$arguments71['key'] = NULL;
$arguments71['id'] = NULL;
$arguments71['default'] = NULL;
$arguments71['arguments'] = NULL;
$arguments71['extensionName'] = NULL;
$arguments71['languageKey'] = NULL;
$arguments71['alternativeLanguageKeys'] = NULL;
$arguments71['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:rm.closeDoc';

$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);

$output68 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure74 = function() use ($renderingContext) {
return NULL;
};
$arguments73 = [];
$arguments73['identifier'] = NULL;
$arguments73['size'] = 'small';
$arguments73['overlay'] = NULL;
$arguments73['state'] = 'default';
$arguments73['alternativeMarkupIdentifier'] = NULL;
$arguments73['identifier'] = 'actions-close';
$arguments73['alternativeMarkupIdentifier'] = 'inline';

$output68 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output68 .= '
                            </a>
                        </div>
                    </div>
                ';
return $output68;
};
$arguments66 = [];
$arguments66['each'] = NULL;
$arguments66['as'] = NULL;
$arguments66['key'] = NULL;
$arguments66['reverse'] = false;
$arguments66['iteration'] = NULL;
$arguments66['each'] = $renderingContext->getVariableProvider()->getByPath('openDocuments');
$arguments66['as'] = 'openDocument';

$output59 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output59 .= '
            </div>
            <hr>
        ';
return $output59;
};
$arguments55 = [];
$arguments55['then'] = NULL;
$arguments55['else'] = NULL;
$arguments55['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array57 = [];
$array57['0'] = $renderingContext->getVariableProvider()->getByPath('openDocuments');

$expression58 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments55['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression58(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array57)
					),
					$renderingContext
				);
$arguments55['__thenClosure'] = $renderChildrenClosure56;

$output54 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output54 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure76 = function() use ($renderingContext) {
$output79 = '';

$output79 .= '
            <h3 class="dropdown-headline">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure81 = function() use ($renderingContext) {
return NULL;
};
$arguments80 = [];
$arguments80['key'] = NULL;
$arguments80['id'] = NULL;
$arguments80['default'] = NULL;
$arguments80['arguments'] = NULL;
$arguments80['extensionName'] = NULL;
$arguments80['languageKey'] = NULL;
$arguments80['alternativeLanguageKeys'] = NULL;
$arguments80['key'] = 'recent_docs';
$arguments80['extensionName'] = 'opendocs';

$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext)]);

$output79 .= '
            </h3>
            <div class="dropdown-table">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure83 = function() use ($renderingContext) {
$output84 = '';

$output84 .= '
                    <div class="dropdown-table-row t3js-topbar-recentdoc">
                        <div class="dropdown-table-column dropdown-table-title">
                            <a class="dropdown-table-title-ellipsis t3js-open-doc" data-pid="';

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('recentDocument.pid')]);

$output84 .= '" href="';

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('recentDocument.uri')]);

$output84 .= '" >
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure86 = function() use ($renderingContext) {
return NULL;
};
$arguments85 = [];
$arguments85['table'] = NULL;
$arguments85['row'] = NULL;
$arguments85['size'] = 'small';
$arguments85['alternativeMarkupIdentifier'] = NULL;
$arguments85['table'] = $renderingContext->getVariableProvider()->getByPath('recentDocument.table');
$arguments85['row'] = $renderingContext->getVariableProvider()->getByPath('recentDocument.record');

$output84 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output84 .= '
                                ';

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('recentDocument.label')]);

$output84 .= '
                            </a>
                        </div>
                    </div>
                ';
return $output84;
};
$arguments82 = [];
$arguments82['each'] = NULL;
$arguments82['as'] = NULL;
$arguments82['key'] = NULL;
$arguments82['reverse'] = false;
$arguments82['iteration'] = NULL;
$arguments82['each'] = $renderingContext->getVariableProvider()->getByPath('recentDocuments');
$arguments82['as'] = 'recentDocument';

$output79 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output79 .= '
            </div>
        ';
return $output79;
};
$arguments75 = [];
$arguments75['then'] = NULL;
$arguments75['else'] = NULL;
$arguments75['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array77 = [];
$array77['0'] = $renderingContext->getVariableProvider()->getByPath('recentDocuments');

$expression78 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments75['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression78(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array77)
					),
					$renderingContext
				);
$arguments75['__thenClosure'] = $renderChildrenClosure76;

$output54 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output54 .= '
    ';
return $output54;
};
$arguments52 = [];
$arguments52['if'] = NULL;

$output46 .= '';

$output46 .= '
';
return $output46;
};
$arguments6 = [];
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$arguments6['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array44 = [];
$array44['0'] = $renderingContext->getVariableProvider()->getByPath('noDocs');

$expression45 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments6['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression45(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array44)
					),
					$renderingContext
				);
$arguments6['__thenClosure'] = function() use ($renderingContext) {
$output8 = '';

$output8 .= '
        <p>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};
$arguments9 = [];
$arguments9['key'] = NULL;
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['languageKey'] = NULL;
$arguments9['alternativeLanguageKeys'] = NULL;
$arguments9['key'] = 'no_docs';
$arguments9['extensionName'] = 'opendocs';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output8 .= '
        </p>
    ';
return $output8;
};
$arguments6['__elseClosures'][] = function() use ($renderingContext) {
$output11 = '';

$output11 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
$output16 = '';

$output16 .= '
            <h3 class="dropdown-headline">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return NULL;
};
$arguments17 = [];
$arguments17['key'] = NULL;
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['languageKey'] = NULL;
$arguments17['alternativeLanguageKeys'] = NULL;
$arguments17['key'] = 'open_docs';
$arguments17['extensionName'] = 'opendocs';

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output16 .= '
                <a href="#" class="dropdown-table-actions-btn dropdown-table-actions-btn-close t3js-topbar-opendocs-close float-end"
                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
return NULL;
};
$arguments19 = [];
$arguments19['key'] = NULL;
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['languageKey'] = NULL;
$arguments19['alternativeLanguageKeys'] = NULL;
$arguments19['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:rm.closeAllDocs';

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output16 .= '">
                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return NULL;
};
$arguments21 = [];
$arguments21['identifier'] = NULL;
$arguments21['size'] = 'small';
$arguments21['overlay'] = NULL;
$arguments21['state'] = 'default';
$arguments21['alternativeMarkupIdentifier'] = NULL;
$arguments21['identifier'] = 'actions-close';
$arguments21['alternativeMarkupIdentifier'] = 'inline';

$output16 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output16 .= '
                </a>
            </h3>
            <div class="dropdown-table">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
$output25 = '';

$output25 .= '
                    <div class="dropdown-table-row t3js-topbar-opendocs-item">
                        <div class="dropdown-table-column dropdown-table-title">
                            <a class="dropdown-table-title-ellipsis t3js-open-doc" data-pid="';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('openDocument.pid')]);

$output25 .= '" href="';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('openDocument.uri')]);

$output25 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};
$arguments26 = [];
$arguments26['table'] = NULL;
$arguments26['row'] = NULL;
$arguments26['size'] = 'small';
$arguments26['alternativeMarkupIdentifier'] = NULL;
$arguments26['table'] = $renderingContext->getVariableProvider()->getByPath('openDocument.table');
$arguments26['row'] = $renderingContext->getVariableProvider()->getByPath('openDocument.record');

$output25 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
                                ';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('openDocument.label')]);

$output25 .= '
                            </a>
                        </div>
                        <div class="dropdown-table-column dropdown-table-actions">
                            <a href="#" class="dropdown-table-actions-btn dropdown-table-actions-btn-close t3js-topbar-opendocs-close"
                                data-opendocsidentifier="';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('openDocument.md5sum')]);

$output25 .= '"
                                title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return NULL;
};
$arguments28 = [];
$arguments28['key'] = NULL;
$arguments28['id'] = NULL;
$arguments28['default'] = NULL;
$arguments28['arguments'] = NULL;
$arguments28['extensionName'] = NULL;
$arguments28['languageKey'] = NULL;
$arguments28['alternativeLanguageKeys'] = NULL;
$arguments28['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:rm.closeDoc';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output25 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return NULL;
};
$arguments30 = [];
$arguments30['identifier'] = NULL;
$arguments30['size'] = 'small';
$arguments30['overlay'] = NULL;
$arguments30['state'] = 'default';
$arguments30['alternativeMarkupIdentifier'] = NULL;
$arguments30['identifier'] = 'actions-close';
$arguments30['alternativeMarkupIdentifier'] = 'inline';

$output25 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output25 .= '
                            </a>
                        </div>
                    </div>
                ';
return $output25;
};
$arguments23 = [];
$arguments23['each'] = NULL;
$arguments23['as'] = NULL;
$arguments23['key'] = NULL;
$arguments23['reverse'] = false;
$arguments23['iteration'] = NULL;
$arguments23['each'] = $renderingContext->getVariableProvider()->getByPath('openDocuments');
$arguments23['as'] = 'openDocument';

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output16 .= '
            </div>
            <hr>
        ';
return $output16;
};
$arguments12 = [];
$arguments12['then'] = NULL;
$arguments12['else'] = NULL;
$arguments12['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array14 = [];
$array14['0'] = $renderingContext->getVariableProvider()->getByPath('openDocuments');

$expression15 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments12['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)
					),
					$renderingContext
				);
$arguments12['__thenClosure'] = $renderChildrenClosure13;

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
$output36 = '';

$output36 .= '
            <h3 class="dropdown-headline">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
return NULL;
};
$arguments37 = [];
$arguments37['key'] = NULL;
$arguments37['id'] = NULL;
$arguments37['default'] = NULL;
$arguments37['arguments'] = NULL;
$arguments37['extensionName'] = NULL;
$arguments37['languageKey'] = NULL;
$arguments37['alternativeLanguageKeys'] = NULL;
$arguments37['key'] = 'recent_docs';
$arguments37['extensionName'] = 'opendocs';

$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext)]);

$output36 .= '
            </h3>
            <div class="dropdown-table">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure40 = function() use ($renderingContext) {
$output41 = '';

$output41 .= '
                    <div class="dropdown-table-row t3js-topbar-recentdoc">
                        <div class="dropdown-table-column dropdown-table-title">
                            <a class="dropdown-table-title-ellipsis t3js-open-doc" data-pid="';

$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('recentDocument.pid')]);

$output41 .= '" href="';

$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('recentDocument.uri')]);

$output41 .= '" >
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
return NULL;
};
$arguments42 = [];
$arguments42['table'] = NULL;
$arguments42['row'] = NULL;
$arguments42['size'] = 'small';
$arguments42['alternativeMarkupIdentifier'] = NULL;
$arguments42['table'] = $renderingContext->getVariableProvider()->getByPath('recentDocument.table');
$arguments42['row'] = $renderingContext->getVariableProvider()->getByPath('recentDocument.record');

$output41 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
                                ';

$output41 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('recentDocument.label')]);

$output41 .= '
                            </a>
                        </div>
                    </div>
                ';
return $output41;
};
$arguments39 = [];
$arguments39['each'] = NULL;
$arguments39['as'] = NULL;
$arguments39['key'] = NULL;
$arguments39['reverse'] = false;
$arguments39['iteration'] = NULL;
$arguments39['each'] = $renderingContext->getVariableProvider()->getByPath('recentDocuments');
$arguments39['as'] = 'recentDocument';

$output36 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output36 .= '
            </div>
        ';
return $output36;
};
$arguments32 = [];
$arguments32['then'] = NULL;
$arguments32['else'] = NULL;
$arguments32['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array34 = [];
$array34['0'] = $renderingContext->getVariableProvider()->getByPath('recentDocuments');

$expression35 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments32['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)
					),
					$renderingContext
				);
$arguments32['__thenClosure'] = $renderChildrenClosure33;

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output11 .= '
    ';
return $output11;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#