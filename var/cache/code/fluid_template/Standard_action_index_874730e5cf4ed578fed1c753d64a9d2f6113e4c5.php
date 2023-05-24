<?php

class Standard_action_index_874730e5cf4ed578fed1c753d64a9d2f6113e4c5 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section headline
 */
public function section_9cd7c186300be56726877e2025e8375d991b084a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output0 = '';

$output0 .= '
    <h1>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output10 = '';

$output10 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
$output13 = '';

$output13 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return NULL;
};
$arguments14 = [];
$arguments14['key'] = NULL;
$arguments14['id'] = NULL;
$arguments14['default'] = NULL;
$arguments14['arguments'] = NULL;
$arguments14['extensionName'] = NULL;
$arguments14['languageKey'] = NULL;
$arguments14['alternativeLanguageKeys'] = NULL;
$arguments14['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:search';
// Rendering Array
$array16 = [];
$array16['0'] = $renderingContext->getVariableProvider()->getByPath('searchTerm');
$array16['1'] = $renderingContext->getVariableProvider()->getByPath('headline');
$arguments14['arguments'] = $array16;

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext)]);

$output13 .= '
            ';
return $output13;
};
$arguments11 = [];

$output10 .= '';

$output10 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
$output19 = '';

$output19 .= '
                ';

$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headline')]);

$output19 .= '
            ';
return $output19;
};
$arguments17 = [];
$arguments17['if'] = NULL;

$output10 .= '';

$output10 .= '
        ';
return $output10;
};
$arguments1 = [];
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array8 = [];
$array8['0'] = $renderingContext->getVariableProvider()->getByPath('searchTerm');

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression9(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
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
$arguments4['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:search';
// Rendering Array
$array6 = [];
$array6['0'] = $renderingContext->getVariableProvider()->getByPath('searchTerm');
$array6['1'] = $renderingContext->getVariableProvider()->getByPath('headline');
$arguments4['arguments'] = $array6;

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output3 .= '
            ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext) {
$output7 = '';

$output7 .= '
                ';

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headline')]);

$output7 .= '
            ';
return $output7;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    </h1>
';

return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output20 = '';

$output20 .= '
    <form method="post" name="fileListForm" action="';

$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('listUrl')]);

$output20 .= '">
        <input type="hidden" name="cmd"/>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
$output25 = '';

$output25 .= '
            <div class="row mb-3">
                <div class="col-6">
                    <div class="input-group">
                        <input type="hidden" name="pointer" value="0" />
                        <button class="btn btn-default" type="submit" name="search">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};
$arguments26 = [];
$arguments26['identifier'] = NULL;
$arguments26['size'] = 'small';
$arguments26['overlay'] = NULL;
$arguments26['state'] = 'default';
$arguments26['alternativeMarkupIdentifier'] = NULL;
$arguments26['identifier'] = 'actions-search';
$arguments26['size'] = 'small';

$output25 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
                        </button>
                        <label for="search_field" class="visually-hidden">
                            ';
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
$arguments28['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.label.searchString';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output25 .= '
                        </label>
                        <input type="search" id="search_field" name="searchTerm" class="form-control" value="';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchTerm')]);

$output25 .= '" placeholder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return NULL;
};
$arguments30 = [];
$arguments30['key'] = NULL;
$arguments30['id'] = NULL;
$arguments30['default'] = NULL;
$arguments30['arguments'] = NULL;
$arguments30['extensionName'] = NULL;
$arguments30['languageKey'] = NULL;
$arguments30['alternativeLanguageKeys'] = NULL;
$arguments30['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.enterSearchString';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext)]);

$output25 .= '" />
                    </div>
                </div>
            </div>
        ';
return $output25;
};
$arguments21 = [];
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$arguments21['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array23 = [];
$array23['0'] = $renderingContext->getVariableProvider()->getByPath('searchTerm');
$array23['1'] = ' || ';
$array23['2'] = $renderingContext->getVariableProvider()->getByPath('totalItems');

$expression24 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments21['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression24(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)
					),
					$renderingContext
				);
$arguments21['__thenClosure'] = $renderChildrenClosure22;

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
$output36 = '';

$output36 .= '
            <div class="t3-filelist-info-container">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
$output61 = '';

$output61 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure63 = function() use ($renderingContext) {
$output64 = '';

$output64 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure66 = function() use ($renderingContext) {
return NULL;
};
$arguments65 = [];
$arguments65['identifier'] = NULL;
$arguments65['size'] = 'small';
$arguments65['overlay'] = NULL;
$arguments65['state'] = 'default';
$arguments65['alternativeMarkupIdentifier'] = NULL;
$arguments65['identifier'] = 'actions-question';
$arguments65['size'] = 'large';

$output64 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output64 .= '
                        <h5 class="mt-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure68 = function() use ($renderingContext) {
return NULL;
};
$arguments67 = [];
$arguments67['key'] = NULL;
$arguments67['id'] = NULL;
$arguments67['default'] = NULL;
$arguments67['arguments'] = NULL;
$arguments67['extensionName'] = NULL;
$arguments67['languageKey'] = NULL;
$arguments67['alternativeLanguageKeys'] = NULL;
$arguments67['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:flashmessage.no_results';

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext)]);

$output64 .= '
                        </h5>
                        <p>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure70 = function() use ($renderingContext) {
return NULL;
};
$arguments69 = [];
$arguments69['key'] = NULL;
$arguments69['id'] = NULL;
$arguments69['default'] = NULL;
$arguments69['arguments'] = NULL;
$arguments69['extensionName'] = NULL;
$arguments69['languageKey'] = NULL;
$arguments69['alternativeLanguageKeys'] = NULL;
$arguments69['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:flashmessage.no_results.message';
// Rendering Array
$array71 = [];
$array71['0'] = $renderingContext->getVariableProvider()->getByPath('searchTerm');
$arguments69['arguments'] = $array71;

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext)]);

$output64 .= '
                        </p>
                        <button type="submit" class="btn btn-info" name="searchTerm" value="">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure73 = function() use ($renderingContext) {
return NULL;
};
$arguments72 = [];
$arguments72['key'] = NULL;
$arguments72['id'] = NULL;
$arguments72['default'] = NULL;
$arguments72['arguments'] = NULL;
$arguments72['extensionName'] = NULL;
$arguments72['languageKey'] = NULL;
$arguments72['alternativeLanguageKeys'] = NULL;
$arguments72['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:search.reset';

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext)]);

$output64 .= '
                        </button>
                    ';
return $output64;
};
$arguments62 = [];

$output61 .= '';

$output61 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure75 = function() use ($renderingContext) {
$output76 = '';

$output76 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure78 = function() use ($renderingContext) {
return NULL;
};
$arguments77 = [];
$arguments77['identifier'] = NULL;
$arguments77['size'] = 'small';
$arguments77['overlay'] = NULL;
$arguments77['state'] = 'default';
$arguments77['alternativeMarkupIdentifier'] = NULL;
$arguments77['identifier'] = 'apps-pagetree-folder-contains';
$arguments77['size'] = 'large';

$output76 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output76 .= '
                        <h5 class="mt-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure80 = function() use ($renderingContext) {
return NULL;
};
$arguments79 = [];
$arguments79['key'] = NULL;
$arguments79['id'] = NULL;
$arguments79['default'] = NULL;
$arguments79['arguments'] = NULL;
$arguments79['extensionName'] = NULL;
$arguments79['languageKey'] = NULL;
$arguments79['alternativeLanguageKeys'] = NULL;
$arguments79['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:flashmessage.no_items';

$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext)]);

$output76 .= '
                        </h5>
                        <p>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure82 = function() use ($renderingContext) {
return NULL;
};
$arguments81 = [];
$arguments81['key'] = NULL;
$arguments81['id'] = NULL;
$arguments81['default'] = NULL;
$arguments81['arguments'] = NULL;
$arguments81['extensionName'] = NULL;
$arguments81['languageKey'] = NULL;
$arguments81['alternativeLanguageKeys'] = NULL;
$arguments81['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:flashmessage.no_items.message';
// Rendering Array
$array83 = [];
$array83['0'] = $renderingContext->getVariableProvider()->getByPath('searchTerm');
$arguments81['arguments'] = $array83;

$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext)]);

$output76 .= '
                        </p>
                        <a href="';

$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('fileUploadUrl')]);

$output76 .= '" class="btn btn-info t3js-drag-uploader-trigger">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure85 = function() use ($renderingContext) {
return NULL;
};
$arguments84 = [];
$arguments84['key'] = NULL;
$arguments84['id'] = NULL;
$arguments84['default'] = NULL;
$arguments84['arguments'] = NULL;
$arguments84['extensionName'] = NULL;
$arguments84['languageKey'] = NULL;
$arguments84['alternativeLanguageKeys'] = NULL;
$arguments84['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.upload';

$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext)]);

$output76 .= '
                        </a>
                    ';
return $output76;
};
$arguments74 = [];
$arguments74['if'] = NULL;

$output61 .= '';

$output61 .= '
                ';
return $output61;
};
$arguments37 = [];
$arguments37['then'] = NULL;
$arguments37['else'] = NULL;
$arguments37['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array59 = [];
$array59['0'] = $renderingContext->getVariableProvider()->getByPath('searchTerm');

$expression60 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments37['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression60(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array59)
					),
					$renderingContext
				);
$arguments37['__thenClosure'] = function() use ($renderingContext) {
$output39 = '';

$output39 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
return NULL;
};
$arguments40 = [];
$arguments40['identifier'] = NULL;
$arguments40['size'] = 'small';
$arguments40['overlay'] = NULL;
$arguments40['state'] = 'default';
$arguments40['alternativeMarkupIdentifier'] = NULL;
$arguments40['identifier'] = 'actions-question';
$arguments40['size'] = 'large';

$output39 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output39 .= '
                        <h5 class="mt-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
return NULL;
};
$arguments42 = [];
$arguments42['key'] = NULL;
$arguments42['id'] = NULL;
$arguments42['default'] = NULL;
$arguments42['arguments'] = NULL;
$arguments42['extensionName'] = NULL;
$arguments42['languageKey'] = NULL;
$arguments42['alternativeLanguageKeys'] = NULL;
$arguments42['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:flashmessage.no_results';

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext)]);

$output39 .= '
                        </h5>
                        <p>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure45 = function() use ($renderingContext) {
return NULL;
};
$arguments44 = [];
$arguments44['key'] = NULL;
$arguments44['id'] = NULL;
$arguments44['default'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$arguments44['languageKey'] = NULL;
$arguments44['alternativeLanguageKeys'] = NULL;
$arguments44['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:flashmessage.no_results.message';
// Rendering Array
$array46 = [];
$array46['0'] = $renderingContext->getVariableProvider()->getByPath('searchTerm');
$arguments44['arguments'] = $array46;

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output39 .= '
                        </p>
                        <button type="submit" class="btn btn-info" name="searchTerm" value="">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
return NULL;
};
$arguments47 = [];
$arguments47['key'] = NULL;
$arguments47['id'] = NULL;
$arguments47['default'] = NULL;
$arguments47['arguments'] = NULL;
$arguments47['extensionName'] = NULL;
$arguments47['languageKey'] = NULL;
$arguments47['alternativeLanguageKeys'] = NULL;
$arguments47['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:search.reset';

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext)]);

$output39 .= '
                        </button>
                    ';
return $output39;
};
$arguments37['__elseClosures'][] = function() use ($renderingContext) {
$output49 = '';

$output49 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
return NULL;
};
$arguments50 = [];
$arguments50['identifier'] = NULL;
$arguments50['size'] = 'small';
$arguments50['overlay'] = NULL;
$arguments50['state'] = 'default';
$arguments50['alternativeMarkupIdentifier'] = NULL;
$arguments50['identifier'] = 'apps-pagetree-folder-contains';
$arguments50['size'] = 'large';

$output49 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output49 .= '
                        <h5 class="mt-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
return NULL;
};
$arguments52 = [];
$arguments52['key'] = NULL;
$arguments52['id'] = NULL;
$arguments52['default'] = NULL;
$arguments52['arguments'] = NULL;
$arguments52['extensionName'] = NULL;
$arguments52['languageKey'] = NULL;
$arguments52['alternativeLanguageKeys'] = NULL;
$arguments52['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:flashmessage.no_items';

$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext)]);

$output49 .= '
                        </h5>
                        <p>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure55 = function() use ($renderingContext) {
return NULL;
};
$arguments54 = [];
$arguments54['key'] = NULL;
$arguments54['id'] = NULL;
$arguments54['default'] = NULL;
$arguments54['arguments'] = NULL;
$arguments54['extensionName'] = NULL;
$arguments54['languageKey'] = NULL;
$arguments54['alternativeLanguageKeys'] = NULL;
$arguments54['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:flashmessage.no_items.message';
// Rendering Array
$array56 = [];
$array56['0'] = $renderingContext->getVariableProvider()->getByPath('searchTerm');
$arguments54['arguments'] = $array56;

$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext)]);

$output49 .= '
                        </p>
                        <a href="';

$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('fileUploadUrl')]);

$output49 .= '" class="btn btn-info t3js-drag-uploader-trigger">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return NULL;
};
$arguments57 = [];
$arguments57['key'] = NULL;
$arguments57['id'] = NULL;
$arguments57['default'] = NULL;
$arguments57['arguments'] = NULL;
$arguments57['extensionName'] = NULL;
$arguments57['languageKey'] = NULL;
$arguments57['alternativeLanguageKeys'] = NULL;
$arguments57['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.upload';

$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output49 .= '
                        </a>
                    ';
return $output49;
};

$output36 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

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
$array34['0'] = '!';
$array34['1'] = $renderingContext->getVariableProvider()->getByPath('totalItems');

$expression35 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments32['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)
					),
					$renderingContext
				);
$arguments32['__thenClosure'] = $renderChildrenClosure33;

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output20 .= '
        <div class="t3-filelist-table-container ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure87 = function() use ($renderingContext) {
return NULL;
};
$arguments86 = [];
$arguments86['then'] = NULL;
$arguments86['else'] = NULL;
$arguments86['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array88 = [];
$array88['0'] = '!';
$array88['1'] = $renderingContext->getVariableProvider()->getByPath('totalItems');

$expression89 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments86['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression89(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array88)
					),
					$renderingContext
				);
$arguments86['then'] = 'hidden';

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output20 .= '">
            <div class="row row-cols-auto justify-content-between gx-0 multi-record-selection-actions-wrapper">
                <div class="col-auto">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure91 = function() use ($renderingContext) {
$output94 = '';

$output94 .= '
                        <div class="row row-cols-auto align-items-center g-2 t3js-multi-record-selection-actions hidden">
                            <div class="col">
                                <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure96 = function() use ($renderingContext) {
return NULL;
};
$arguments95 = [];
$arguments95['key'] = NULL;
$arguments95['id'] = NULL;
$arguments95['default'] = NULL;
$arguments95['arguments'] = NULL;
$arguments95['extensionName'] = NULL;
$arguments95['languageKey'] = NULL;
$arguments95['alternativeLanguageKeys'] = NULL;
$arguments95['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.selection';

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext)]);

$output94 .= '</strong>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-default btn-sm disabled" data-multi-record-selection-action="edit" data-multi-record-selection-action-config="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure98 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('editActionConfiguration');
};
$arguments97 = [];
$arguments97['value'] = NULL;

$output94 .= isset($arguments97['value']) ? $arguments97['value'] : $renderChildrenClosure98();

$output94 .= '">
                                <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure100 = function() use ($renderingContext) {
return NULL;
};
$arguments99 = [];
$arguments99['key'] = NULL;
$arguments99['id'] = NULL;
$arguments99['default'] = NULL;
$arguments99['arguments'] = NULL;
$arguments99['extensionName'] = NULL;
$arguments99['languageKey'] = NULL;
$arguments99['alternativeLanguageKeys'] = NULL;
$arguments99['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:editMarked';

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext)]);

$output94 .= '">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure102 = function() use ($renderingContext) {
return NULL;
};
$arguments101 = [];
$arguments101['identifier'] = NULL;
$arguments101['size'] = 'small';
$arguments101['overlay'] = NULL;
$arguments101['state'] = 'default';
$arguments101['alternativeMarkupIdentifier'] = NULL;
$arguments101['identifier'] = 'actions-open';
$arguments101['size'] = 'small';

$output94 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output94 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure104 = function() use ($renderingContext) {
return NULL;
};
$arguments103 = [];
$arguments103['key'] = NULL;
$arguments103['id'] = NULL;
$arguments103['default'] = NULL;
$arguments103['arguments'] = NULL;
$arguments103['extensionName'] = NULL;
$arguments103['languageKey'] = NULL;
$arguments103['alternativeLanguageKeys'] = NULL;
$arguments103['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:editMarked';

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext)]);

$output94 .= '
                                </span>
                                </button>
                            </div>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure106 = function() use ($renderingContext) {
$output109 = '';

$output109 .= '
                                <div class="col">
                                    <button type="button" class="btn btn-default btn-sm" data-multi-record-selection-action="download" data-multi-record-selection-action-config="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure111 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('downloadActionConfiguration');
};
$arguments110 = [];
$arguments110['value'] = NULL;

$output109 .= isset($arguments110['value']) ? $arguments110['value'] : $renderChildrenClosure111();

$output109 .= '">
                                        <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure113 = function() use ($renderingContext) {
return NULL;
};
$arguments112 = [];
$arguments112['key'] = NULL;
$arguments112['id'] = NULL;
$arguments112['default'] = NULL;
$arguments112['arguments'] = NULL;
$arguments112['extensionName'] = NULL;
$arguments112['languageKey'] = NULL;
$arguments112['alternativeLanguageKeys'] = NULL;
$arguments112['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:download';

$output109 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext)]);

$output109 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure115 = function() use ($renderingContext) {
return NULL;
};
$arguments114 = [];
$arguments114['identifier'] = NULL;
$arguments114['size'] = 'small';
$arguments114['overlay'] = NULL;
$arguments114['state'] = 'default';
$arguments114['alternativeMarkupIdentifier'] = NULL;
$arguments114['identifier'] = 'actions-download';
$arguments114['size'] = 'small';

$output109 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output109 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure117 = function() use ($renderingContext) {
return NULL;
};
$arguments116 = [];
$arguments116['key'] = NULL;
$arguments116['id'] = NULL;
$arguments116['default'] = NULL;
$arguments116['arguments'] = NULL;
$arguments116['extensionName'] = NULL;
$arguments116['languageKey'] = NULL;
$arguments116['alternativeLanguageKeys'] = NULL;
$arguments116['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:download';

$output109 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext)]);

$output109 .= '
                                        </span>
                                    </button>
                                </div>
                            ';
return $output109;
};
$arguments105 = [];
$arguments105['then'] = NULL;
$arguments105['else'] = NULL;
$arguments105['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array107 = [];
$array107['0'] = $renderingContext->getVariableProvider()->getByPath('downloadActionConfiguration');

$expression108 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments105['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression108(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array107)
					),
					$renderingContext
				);
$arguments105['__thenClosure'] = $renderChildrenClosure106;

$output94 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output94 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure119 = function() use ($renderingContext) {
$output122 = '';

$output122 .= '
                                <div class="col">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure124 = function() use ($renderingContext) {
return NULL;
};
$arguments123 = [];
$arguments123['then'] = NULL;
$arguments123['else'] = NULL;
$arguments123['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array125 = [];
$array125['0'] = $renderingContext->getVariableProvider()->getByPath('enableClipBoard.mode');
$array125['1'] = ' == normal';

$expression126 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "normal");};
$arguments123['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression126(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array125)
					),
					$renderingContext
				);
$arguments123['then'] = 'disabled';

$output122 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output122 .= '" data-multi-record-selection-action="copyMarked">
                                        <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure128 = function() use ($renderingContext) {
return NULL;
};
$arguments127 = [];
$arguments127['key'] = NULL;
$arguments127['id'] = NULL;
$arguments127['default'] = NULL;
$arguments127['arguments'] = NULL;
$arguments127['extensionName'] = NULL;
$arguments127['languageKey'] = NULL;
$arguments127['alternativeLanguageKeys'] = NULL;
$arguments127['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:clip_selectMarked';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext)]);

$output122 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure130 = function() use ($renderingContext) {
return NULL;
};
$arguments129 = [];
$arguments129['identifier'] = NULL;
$arguments129['size'] = 'small';
$arguments129['overlay'] = NULL;
$arguments129['state'] = 'default';
$arguments129['alternativeMarkupIdentifier'] = NULL;
$arguments129['identifier'] = 'actions-edit-copy';
$arguments129['size'] = 'small';

$output122 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output122 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure132 = function() use ($renderingContext) {
return NULL;
};
$arguments131 = [];
$arguments131['key'] = NULL;
$arguments131['id'] = NULL;
$arguments131['default'] = NULL;
$arguments131['arguments'] = NULL;
$arguments131['extensionName'] = NULL;
$arguments131['languageKey'] = NULL;
$arguments131['alternativeLanguageKeys'] = NULL;
$arguments131['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:clip_selectMarked';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext)]);

$output122 .= '
                                        </span>
                                        </button>
                                        <button type="button" class="btn btn-default btn-sm ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure134 = function() use ($renderingContext) {
return NULL;
};
$arguments133 = [];
$arguments133['then'] = NULL;
$arguments133['else'] = NULL;
$arguments133['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array135 = [];
$array135['0'] = $renderingContext->getVariableProvider()->getByPath('enableClipBoard.mode');
$array135['1'] = ' == normal';

$expression136 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "normal");};
$arguments133['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression136(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array135)
					),
					$renderingContext
				);
$arguments133['then'] = 'disabled';

$output122 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext);

$output122 .= '" data-multi-record-selection-action="removeMarked">
                                        <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure138 = function() use ($renderingContext) {
return NULL;
};
$arguments137 = [];
$arguments137['key'] = NULL;
$arguments137['id'] = NULL;
$arguments137['default'] = NULL;
$arguments137['arguments'] = NULL;
$arguments137['extensionName'] = NULL;
$arguments137['languageKey'] = NULL;
$arguments137['alternativeLanguageKeys'] = NULL;
$arguments137['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:clip_deleteMarked';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext)]);

$output122 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure140 = function() use ($renderingContext) {
return NULL;
};
$arguments139 = [];
$arguments139['identifier'] = NULL;
$arguments139['size'] = 'small';
$arguments139['overlay'] = NULL;
$arguments139['state'] = 'default';
$arguments139['alternativeMarkupIdentifier'] = NULL;
$arguments139['identifier'] = 'actions-remove';
$arguments139['size'] = 'small';

$output122 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output122 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure142 = function() use ($renderingContext) {
return NULL;
};
$arguments141 = [];
$arguments141['key'] = NULL;
$arguments141['id'] = NULL;
$arguments141['default'] = NULL;
$arguments141['arguments'] = NULL;
$arguments141['extensionName'] = NULL;
$arguments141['languageKey'] = NULL;
$arguments141['alternativeLanguageKeys'] = NULL;
$arguments141['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:clip_deleteMarked';

$output122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext)]);

$output122 .= '
                                        </span>
                                        </button>
                                    </div>
                                </div>
                            ';
return $output122;
};
$arguments118 = [];
$arguments118['then'] = NULL;
$arguments118['else'] = NULL;
$arguments118['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array120 = [];
$array120['0'] = $renderingContext->getVariableProvider()->getByPath('showClipboardPanel');
$array120['1'] = ' && ';
$array120['2'] = $renderingContext->getVariableProvider()->getByPath('enableClipBoard.mode');
$array120['3'] = ' != \'normal\'';

$expression121 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) != 'normal'));};
$arguments118['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression121(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array120)
					),
					$renderingContext
				);
$arguments118['__thenClosure'] = $renderChildrenClosure119;

$output94 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output94 .= '
                            <div class="col">
                                <button type="button" class="btn btn-default btn-sm" data-multi-record-selection-action="delete" data-multi-record-selection-action-config="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure144 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('deleteActionConfiguration');
};
$arguments143 = [];
$arguments143['value'] = NULL;

$output94 .= isset($arguments143['value']) ? $arguments143['value'] : $renderChildrenClosure144();

$output94 .= '">
                                <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure146 = function() use ($renderingContext) {
return NULL;
};
$arguments145 = [];
$arguments145['key'] = NULL;
$arguments145['id'] = NULL;
$arguments145['default'] = NULL;
$arguments145['arguments'] = NULL;
$arguments145['extensionName'] = NULL;
$arguments145['languageKey'] = NULL;
$arguments145['alternativeLanguageKeys'] = NULL;
$arguments145['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.delete';

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext)]);

$output94 .= '">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure148 = function() use ($renderingContext) {
return NULL;
};
$arguments147 = [];
$arguments147['identifier'] = NULL;
$arguments147['size'] = 'small';
$arguments147['overlay'] = NULL;
$arguments147['state'] = 'default';
$arguments147['alternativeMarkupIdentifier'] = NULL;
$arguments147['identifier'] = 'actions-edit-delete';
$arguments147['size'] = 'small';

$output94 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output94 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure150 = function() use ($renderingContext) {
return NULL;
};
$arguments149 = [];
$arguments149['key'] = NULL;
$arguments149['id'] = NULL;
$arguments149['default'] = NULL;
$arguments149['arguments'] = NULL;
$arguments149['extensionName'] = NULL;
$arguments149['languageKey'] = NULL;
$arguments149['alternativeLanguageKeys'] = NULL;
$arguments149['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.delete';

$output94 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext)]);

$output94 .= '
                                </span>
                                </button>
                            </div>
                        </div>
                    ';
return $output94;
};
$arguments90 = [];
$arguments90['then'] = NULL;
$arguments90['else'] = NULL;
$arguments90['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array92 = [];
$array92['0'] = $renderingContext->getVariableProvider()->getByPath('listHtml');

$expression93 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments90['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression93(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array92)
					),
					$renderingContext
				);
$arguments90['__thenClosure'] = $renderChildrenClosure91;

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output20 .= '
                </div>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure152 = function() use ($renderingContext) {
$output155 = '';

$output155 .= '
                    <div class="col-auto">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure157 = function() use ($renderingContext) {
$output160 = '';

$output160 .= '
                            <div class="row row-cols-auto align-items-center gx-3">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure162 = function() use ($renderingContext) {
$output165 = '';

$output165 .= '
                                    <div class="col">
                                        <typo3-backend-column-selector-button
                                            url="';

$output165 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('columnSelector.url')]);

$output165 .= '"
                                            target="';

$output165 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('listUrl')]);

$output165 .= '"
                                            title="';

$output165 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('columnSelector.title')]);

$output165 .= '"
                                            ok="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure167 = function() use ($renderingContext) {
return NULL;
};
$arguments166 = [];
$arguments166['key'] = NULL;
$arguments166['id'] = NULL;
$arguments166['default'] = NULL;
$arguments166['arguments'] = NULL;
$arguments166['extensionName'] = NULL;
$arguments166['languageKey'] = NULL;
$arguments166['alternativeLanguageKeys'] = NULL;
$arguments166['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_column_selector.xlf:updateColumnView';

$output165 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext)]);

$output165 .= '"
                                            close="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure169 = function() use ($renderingContext) {
return NULL;
};
$arguments168 = [];
$arguments168['key'] = NULL;
$arguments168['id'] = NULL;
$arguments168['default'] = NULL;
$arguments168['arguments'] = NULL;
$arguments168['extensionName'] = NULL;
$arguments168['languageKey'] = NULL;
$arguments168['alternativeLanguageKeys'] = NULL;
$arguments168['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.cancel';

$output165 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext)]);

$output165 .= '"
                                            error="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure171 = function() use ($renderingContext) {
return NULL;
};
$arguments170 = [];
$arguments170['key'] = NULL;
$arguments170['id'] = NULL;
$arguments170['default'] = NULL;
$arguments170['arguments'] = NULL;
$arguments170['extensionName'] = NULL;
$arguments170['languageKey'] = NULL;
$arguments170['alternativeLanguageKeys'] = NULL;
$arguments170['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_column_selector.xlf:updateColumnView.error';

$output165 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext)]);

$output165 .= '">
                                            <button type="button" class="btn btn-default btn-sm" title="';

$output165 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('columnSelector.title')]);

$output165 .= '">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure173 = function() use ($renderingContext) {
return NULL;
};
$arguments172 = [];
$arguments172['identifier'] = NULL;
$arguments172['size'] = 'small';
$arguments172['overlay'] = NULL;
$arguments172['state'] = 'default';
$arguments172['alternativeMarkupIdentifier'] = NULL;
$arguments172['identifier'] = 'actions-options';
$arguments172['size'] = 'small';

$output165 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output165 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure175 = function() use ($renderingContext) {
return NULL;
};
$arguments174 = [];
$arguments174['key'] = NULL;
$arguments174['id'] = NULL;
$arguments174['default'] = NULL;
$arguments174['arguments'] = NULL;
$arguments174['extensionName'] = NULL;
$arguments174['languageKey'] = NULL;
$arguments174['alternativeLanguageKeys'] = NULL;
$arguments174['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_column_selector.xlf:showColumns';

$output165 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext)]);

$output165 .= '
                                            </button>
                                        </typo3-backend-column-selector-button>
                                    </div>
                                ';
return $output165;
};
$arguments161 = [];
$arguments161['then'] = NULL;
$arguments161['else'] = NULL;
$arguments161['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array163 = [];
$array163['0'] = $renderingContext->getVariableProvider()->getByPath('columnSelector');

$expression164 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments161['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression164(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array163)
					),
					$renderingContext
				);
$arguments161['__thenClosure'] = $renderChildrenClosure162;

$output160 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output160 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure177 = function() use ($renderingContext) {
$output180 = '';

$output180 .= '
                                    <div class="col">
                                        <div class="form-check form-switch mb-0">
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure182 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('displayThumbs.html');
};
$arguments181 = [];
$arguments181['value'] = NULL;

$output180 .= isset($arguments181['value']) ? $arguments181['value'] : $renderChildrenClosure182();

$output180 .= '
                                            <label for="checkDisplayThumbs" class="form-check-label">
                                                ';

$output180 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('displayThumbs.label')]);

$output180 .= '
                                            </label>
                                        </div>
                                    </div>
                                ';
return $output180;
};
$arguments176 = [];
$arguments176['then'] = NULL;
$arguments176['else'] = NULL;
$arguments176['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array178 = [];
$array178['0'] = $renderingContext->getVariableProvider()->getByPath('displayThumbs.enabled');

$expression179 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments176['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression179(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array178)
					),
					$renderingContext
				);
$arguments176['__thenClosure'] = $renderChildrenClosure177;

$output160 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output160 .= '
                            </div>
                        ';
return $output160;
};
$arguments156 = [];
$arguments156['then'] = NULL;
$arguments156['else'] = NULL;
$arguments156['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array158 = [];
$array158['0'] = $renderingContext->getVariableProvider()->getByPath('columnSelector');
$array158['1'] = ' || ';
$array158['2'] = $renderingContext->getVariableProvider()->getByPath('displayThumbs.enabled');

$expression159 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments156['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression159(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array158)
					),
					$renderingContext
				);
$arguments156['__thenClosure'] = $renderChildrenClosure157;

$output155 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output155 .= '
                    </div>
                ';
return $output155;
};
$arguments151 = [];
$arguments151['then'] = NULL;
$arguments151['else'] = NULL;
$arguments151['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array153 = [];
$array153['0'] = $renderingContext->getVariableProvider()->getByPath('listHtml');

$expression154 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments151['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression154(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array153)
					),
					$renderingContext
				);
$arguments151['__thenClosure'] = $renderChildrenClosure152;

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output20 .= '
            </div>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure184 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('listHtml');
};
$arguments183 = [];
$arguments183['value'] = NULL;

$output20 .= isset($arguments183['value']) ? $arguments183['value'] : $renderChildrenClosure184();

$output20 .= '
        </div>
    </form>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure186 = function() use ($renderingContext) {
$output189 = '';

$output189 .= '
        <div class="mb-3">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure191 = function() use ($renderingContext) {
$output194 = '';

$output194 .= '
                <div class="form-check form-switch">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure196 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('enableClipBoard.html');
};
$arguments195 = [];
$arguments195['value'] = NULL;

$output194 .= isset($arguments195['value']) ? $arguments195['value'] : $renderChildrenClosure196();

$output194 .= '
                    <label for="checkClipBoard" class="form-check-label">
                        ';

$output194 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('enableClipBoard.label')]);

$output194 .= '
                    </label>
                </div>
            ';
return $output194;
};
$arguments190 = [];
$arguments190['then'] = NULL;
$arguments190['else'] = NULL;
$arguments190['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array192 = [];
$array192['0'] = $renderingContext->getVariableProvider()->getByPath('enableClipBoard.enabled');

$expression193 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments190['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression193(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array192)
					),
					$renderingContext
				);
$arguments190['__thenClosure'] = $renderChildrenClosure191;

$output189 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output189 .= '
        </div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure198 = function() use ($renderingContext) {
$output201 = '';

$output201 .= '
            <typo3-backend-clipboard-panel return-url="';

$output201 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('listUrl')]);

$output201 .= '" table="_FILE"></typo3-backend-clipboard-panel>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\CshViewHelper
$renderChildrenClosure203 = function() use ($renderingContext) {
return NULL;
};
$arguments202 = [];
$arguments202['table'] = NULL;
$arguments202['field'] = '';
$arguments202['wrap'] = '';
$arguments202['table'] = 'xMOD_csh_corebe';
$arguments202['field'] = 'filelist_clipboard';
$arguments202['wrap'] = '<span class=\'btn btn-sm btn-default\'>|</span>';

$output201 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\CshViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output201 .= '
        ';
return $output201;
};
$arguments197 = [];
$arguments197['then'] = NULL;
$arguments197['else'] = NULL;
$arguments197['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array199 = [];
$array199['0'] = $renderingContext->getVariableProvider()->getByPath('showClipboardPanel');

$expression200 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments197['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression200(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array199)
					),
					$renderingContext
				);
$arguments197['__thenClosure'] = $renderChildrenClosure198;

$output189 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output189 .= '
    ';
return $output189;
};
$arguments185 = [];
$arguments185['then'] = NULL;
$arguments185['else'] = NULL;
$arguments185['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array187 = [];
$array187['0'] = $renderingContext->getVariableProvider()->getByPath('listHtml');

$expression188 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments185['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression188(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array187)
					),
					$renderingContext
				);
$arguments185['__thenClosure'] = $renderChildrenClosure186;

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output20 .= '
';

return $output20;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$output204 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure206 = function() use ($renderingContext) {
return '<!-- identifier initializes tree state -->';
};
$arguments205 = [];

$output204 .= '';

$output204 .= '
<div class="filelist-main" data-filelist-current-identifier="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure208 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('currentIdentifier');
};
$arguments207 = [];
$arguments207['value'] = NULL;
$arguments207['keepQuotes'] = false;
$arguments207['encoding'] = 'UTF-8';
$arguments207['doubleEncode'] = true;
$value209 = ($arguments207['value'] !== NULL ? $arguments207['value'] : $renderChildrenClosure208());

$output204 .= !is_string($value209) && !(is_object($value209) && method_exists($value209, '__toString')) ? $value209 : htmlspecialchars($value209, ($arguments207['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments207['encoding'], $arguments207['doubleEncode']);

$output204 .= '">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure211 = function() use ($renderingContext) {
$output214 = '';

$output214 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure216 = function() use ($renderingContext) {
return NULL;
};
$arguments215 = [];
$arguments215['section'] = NULL;
$arguments215['partial'] = NULL;
$arguments215['delegate'] = NULL;
$arguments215['renderable'] = NULL;
$arguments215['arguments'] = array (
);
$arguments215['optional'] = false;
$arguments215['default'] = NULL;
$arguments215['contentAs'] = NULL;
$arguments215['debug'] = true;
$arguments215['section'] = 'headline';
$arguments215['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output214 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext);

$output214 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure218 = function() use ($renderingContext) {
return NULL;
};
$arguments217 = [];
$arguments217['section'] = NULL;
$arguments217['partial'] = NULL;
$arguments217['delegate'] = NULL;
$arguments217['renderable'] = NULL;
$arguments217['arguments'] = array (
);
$arguments217['optional'] = false;
$arguments217['default'] = NULL;
$arguments217['contentAs'] = NULL;
$arguments217['debug'] = true;
$arguments217['section'] = 'content';
$arguments217['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output214 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output214 .= '
    ';
return $output214;
};
$arguments210 = [];
$arguments210['then'] = NULL;
$arguments210['else'] = NULL;
$arguments210['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array212 = [];
$array212['0'] = $renderingContext->getVariableProvider()->getByPath('folderIdentifier');

$expression213 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments210['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression213(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array212)
					),
					$renderingContext
				);
$arguments210['__thenClosure'] = $renderChildrenClosure211;

$output204 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output204 .= '
</div>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure220 = function() use ($renderingContext) {
$output223 = '';

$output223 .= '
    <div class="t3js-drag-uploader" data-target-folder="';

$output223 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('folderIdentifier')]);

$output223 .= '" data-progress-container="#typo3-filelist"
        data-dropzone-trigger=".t3js-drag-uploader-trigger" data-dropzone-target=".t3js-module-body h1:first"
        data-file-deny-pattern="';

$output223 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('drapUploader.fileDenyPattern')]);

$output223 .= '" data-max-file-size="';

$output223 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('drapUploader.maxFileSize')]);

$output223 .= '"
        data-default-action="';

$output223 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('drapUploader.defaultDuplicationBehaviourAction')]);

$output223 .= '" data-reload-url="';

$output223 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('listUrl')]);

$output223 .= '"
    ></div>
';
return $output223;
};
$arguments219 = [];
$arguments219['then'] = NULL;
$arguments219['else'] = NULL;
$arguments219['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array221 = [];
$array221['0'] = $renderingContext->getVariableProvider()->getByPath('drapUploader');

$expression222 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments219['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression222(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array221)
					),
					$renderingContext
				);
$arguments219['__thenClosure'] = $renderChildrenClosure220;

$output204 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);

$output204 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure225 = function() use ($renderingContext) {
$output226 = '';

$output226 .= '
    <h1>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure228 = function() use ($renderingContext) {
$output236 = '';

$output236 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure238 = function() use ($renderingContext) {
$output239 = '';

$output239 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure241 = function() use ($renderingContext) {
return NULL;
};
$arguments240 = [];
$arguments240['key'] = NULL;
$arguments240['id'] = NULL;
$arguments240['default'] = NULL;
$arguments240['arguments'] = NULL;
$arguments240['extensionName'] = NULL;
$arguments240['languageKey'] = NULL;
$arguments240['alternativeLanguageKeys'] = NULL;
$arguments240['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:search';
// Rendering Array
$array242 = [];
$array242['0'] = $renderingContext->getVariableProvider()->getByPath('searchTerm');
$array242['1'] = $renderingContext->getVariableProvider()->getByPath('headline');
$arguments240['arguments'] = $array242;

$output239 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext)]);

$output239 .= '
            ';
return $output239;
};
$arguments237 = [];

$output236 .= '';

$output236 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure244 = function() use ($renderingContext) {
$output245 = '';

$output245 .= '
                ';

$output245 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headline')]);

$output245 .= '
            ';
return $output245;
};
$arguments243 = [];
$arguments243['if'] = NULL;

$output236 .= '';

$output236 .= '
        ';
return $output236;
};
$arguments227 = [];
$arguments227['then'] = NULL;
$arguments227['else'] = NULL;
$arguments227['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array234 = [];
$array234['0'] = $renderingContext->getVariableProvider()->getByPath('searchTerm');

$expression235 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments227['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression235(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array234)
					),
					$renderingContext
				);
$arguments227['__thenClosure'] = function() use ($renderingContext) {
$output229 = '';

$output229 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure231 = function() use ($renderingContext) {
return NULL;
};
$arguments230 = [];
$arguments230['key'] = NULL;
$arguments230['id'] = NULL;
$arguments230['default'] = NULL;
$arguments230['arguments'] = NULL;
$arguments230['extensionName'] = NULL;
$arguments230['languageKey'] = NULL;
$arguments230['alternativeLanguageKeys'] = NULL;
$arguments230['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:search';
// Rendering Array
$array232 = [];
$array232['0'] = $renderingContext->getVariableProvider()->getByPath('searchTerm');
$array232['1'] = $renderingContext->getVariableProvider()->getByPath('headline');
$arguments230['arguments'] = $array232;

$output229 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext)]);

$output229 .= '
            ';
return $output229;
};
$arguments227['__elseClosures'][] = function() use ($renderingContext) {
$output233 = '';

$output233 .= '
                ';

$output233 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headline')]);

$output233 .= '
            ';
return $output233;
};

$output226 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output226 .= '
    </h1>
';
return $output226;
};
$arguments224 = [];
$arguments224['name'] = NULL;
$arguments224['name'] = 'headline';

$output204 .= '';

$output204 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure247 = function() use ($renderingContext) {
$output248 = '';

$output248 .= '
    <form method="post" name="fileListForm" action="';

$output248 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('listUrl')]);

$output248 .= '">
        <input type="hidden" name="cmd"/>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure250 = function() use ($renderingContext) {
$output253 = '';

$output253 .= '
            <div class="row mb-3">
                <div class="col-6">
                    <div class="input-group">
                        <input type="hidden" name="pointer" value="0" />
                        <button class="btn btn-default" type="submit" name="search">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure255 = function() use ($renderingContext) {
return NULL;
};
$arguments254 = [];
$arguments254['identifier'] = NULL;
$arguments254['size'] = 'small';
$arguments254['overlay'] = NULL;
$arguments254['state'] = 'default';
$arguments254['alternativeMarkupIdentifier'] = NULL;
$arguments254['identifier'] = 'actions-search';
$arguments254['size'] = 'small';

$output253 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext);

$output253 .= '
                        </button>
                        <label for="search_field" class="visually-hidden">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure257 = function() use ($renderingContext) {
return NULL;
};
$arguments256 = [];
$arguments256['key'] = NULL;
$arguments256['id'] = NULL;
$arguments256['default'] = NULL;
$arguments256['arguments'] = NULL;
$arguments256['extensionName'] = NULL;
$arguments256['languageKey'] = NULL;
$arguments256['alternativeLanguageKeys'] = NULL;
$arguments256['id'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.label.searchString';

$output253 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext)]);

$output253 .= '
                        </label>
                        <input type="search" id="search_field" name="searchTerm" class="form-control" value="';

$output253 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchTerm')]);

$output253 .= '" placeholder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure259 = function() use ($renderingContext) {
return NULL;
};
$arguments258 = [];
$arguments258['key'] = NULL;
$arguments258['id'] = NULL;
$arguments258['default'] = NULL;
$arguments258['arguments'] = NULL;
$arguments258['extensionName'] = NULL;
$arguments258['languageKey'] = NULL;
$arguments258['alternativeLanguageKeys'] = NULL;
$arguments258['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.enterSearchString';

$output253 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext)]);

$output253 .= '" />
                    </div>
                </div>
            </div>
        ';
return $output253;
};
$arguments249 = [];
$arguments249['then'] = NULL;
$arguments249['else'] = NULL;
$arguments249['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array251 = [];
$array251['0'] = $renderingContext->getVariableProvider()->getByPath('searchTerm');
$array251['1'] = ' || ';
$array251['2'] = $renderingContext->getVariableProvider()->getByPath('totalItems');

$expression252 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments249['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression252(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array251)
					),
					$renderingContext
				);
$arguments249['__thenClosure'] = $renderChildrenClosure250;

$output248 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);

$output248 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure261 = function() use ($renderingContext) {
$output264 = '';

$output264 .= '
            <div class="t3-filelist-info-container">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure266 = function() use ($renderingContext) {
$output289 = '';

$output289 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure291 = function() use ($renderingContext) {
$output292 = '';

$output292 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure294 = function() use ($renderingContext) {
return NULL;
};
$arguments293 = [];
$arguments293['identifier'] = NULL;
$arguments293['size'] = 'small';
$arguments293['overlay'] = NULL;
$arguments293['state'] = 'default';
$arguments293['alternativeMarkupIdentifier'] = NULL;
$arguments293['identifier'] = 'actions-question';
$arguments293['size'] = 'large';

$output292 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments293, $renderChildrenClosure294, $renderingContext);

$output292 .= '
                        <h5 class="mt-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure296 = function() use ($renderingContext) {
return NULL;
};
$arguments295 = [];
$arguments295['key'] = NULL;
$arguments295['id'] = NULL;
$arguments295['default'] = NULL;
$arguments295['arguments'] = NULL;
$arguments295['extensionName'] = NULL;
$arguments295['languageKey'] = NULL;
$arguments295['alternativeLanguageKeys'] = NULL;
$arguments295['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:flashmessage.no_results';

$output292 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext)]);

$output292 .= '
                        </h5>
                        <p>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure298 = function() use ($renderingContext) {
return NULL;
};
$arguments297 = [];
$arguments297['key'] = NULL;
$arguments297['id'] = NULL;
$arguments297['default'] = NULL;
$arguments297['arguments'] = NULL;
$arguments297['extensionName'] = NULL;
$arguments297['languageKey'] = NULL;
$arguments297['alternativeLanguageKeys'] = NULL;
$arguments297['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:flashmessage.no_results.message';
// Rendering Array
$array299 = [];
$array299['0'] = $renderingContext->getVariableProvider()->getByPath('searchTerm');
$arguments297['arguments'] = $array299;

$output292 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments297, $renderChildrenClosure298, $renderingContext)]);

$output292 .= '
                        </p>
                        <button type="submit" class="btn btn-info" name="searchTerm" value="">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure301 = function() use ($renderingContext) {
return NULL;
};
$arguments300 = [];
$arguments300['key'] = NULL;
$arguments300['id'] = NULL;
$arguments300['default'] = NULL;
$arguments300['arguments'] = NULL;
$arguments300['extensionName'] = NULL;
$arguments300['languageKey'] = NULL;
$arguments300['alternativeLanguageKeys'] = NULL;
$arguments300['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:search.reset';

$output292 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments300, $renderChildrenClosure301, $renderingContext)]);

$output292 .= '
                        </button>
                    ';
return $output292;
};
$arguments290 = [];

$output289 .= '';

$output289 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure303 = function() use ($renderingContext) {
$output304 = '';

$output304 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure306 = function() use ($renderingContext) {
return NULL;
};
$arguments305 = [];
$arguments305['identifier'] = NULL;
$arguments305['size'] = 'small';
$arguments305['overlay'] = NULL;
$arguments305['state'] = 'default';
$arguments305['alternativeMarkupIdentifier'] = NULL;
$arguments305['identifier'] = 'apps-pagetree-folder-contains';
$arguments305['size'] = 'large';

$output304 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);

$output304 .= '
                        <h5 class="mt-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure308 = function() use ($renderingContext) {
return NULL;
};
$arguments307 = [];
$arguments307['key'] = NULL;
$arguments307['id'] = NULL;
$arguments307['default'] = NULL;
$arguments307['arguments'] = NULL;
$arguments307['extensionName'] = NULL;
$arguments307['languageKey'] = NULL;
$arguments307['alternativeLanguageKeys'] = NULL;
$arguments307['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:flashmessage.no_items';

$output304 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext)]);

$output304 .= '
                        </h5>
                        <p>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure310 = function() use ($renderingContext) {
return NULL;
};
$arguments309 = [];
$arguments309['key'] = NULL;
$arguments309['id'] = NULL;
$arguments309['default'] = NULL;
$arguments309['arguments'] = NULL;
$arguments309['extensionName'] = NULL;
$arguments309['languageKey'] = NULL;
$arguments309['alternativeLanguageKeys'] = NULL;
$arguments309['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:flashmessage.no_items.message';
// Rendering Array
$array311 = [];
$array311['0'] = $renderingContext->getVariableProvider()->getByPath('searchTerm');
$arguments309['arguments'] = $array311;

$output304 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext)]);

$output304 .= '
                        </p>
                        <a href="';

$output304 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('fileUploadUrl')]);

$output304 .= '" class="btn btn-info t3js-drag-uploader-trigger">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure313 = function() use ($renderingContext) {
return NULL;
};
$arguments312 = [];
$arguments312['key'] = NULL;
$arguments312['id'] = NULL;
$arguments312['default'] = NULL;
$arguments312['arguments'] = NULL;
$arguments312['extensionName'] = NULL;
$arguments312['languageKey'] = NULL;
$arguments312['alternativeLanguageKeys'] = NULL;
$arguments312['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.upload';

$output304 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext)]);

$output304 .= '
                        </a>
                    ';
return $output304;
};
$arguments302 = [];
$arguments302['if'] = NULL;

$output289 .= '';

$output289 .= '
                ';
return $output289;
};
$arguments265 = [];
$arguments265['then'] = NULL;
$arguments265['else'] = NULL;
$arguments265['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array287 = [];
$array287['0'] = $renderingContext->getVariableProvider()->getByPath('searchTerm');

$expression288 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments265['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression288(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array287)
					),
					$renderingContext
				);
$arguments265['__thenClosure'] = function() use ($renderingContext) {
$output267 = '';

$output267 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure269 = function() use ($renderingContext) {
return NULL;
};
$arguments268 = [];
$arguments268['identifier'] = NULL;
$arguments268['size'] = 'small';
$arguments268['overlay'] = NULL;
$arguments268['state'] = 'default';
$arguments268['alternativeMarkupIdentifier'] = NULL;
$arguments268['identifier'] = 'actions-question';
$arguments268['size'] = 'large';

$output267 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);

$output267 .= '
                        <h5 class="mt-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure271 = function() use ($renderingContext) {
return NULL;
};
$arguments270 = [];
$arguments270['key'] = NULL;
$arguments270['id'] = NULL;
$arguments270['default'] = NULL;
$arguments270['arguments'] = NULL;
$arguments270['extensionName'] = NULL;
$arguments270['languageKey'] = NULL;
$arguments270['alternativeLanguageKeys'] = NULL;
$arguments270['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:flashmessage.no_results';

$output267 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext)]);

$output267 .= '
                        </h5>
                        <p>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure273 = function() use ($renderingContext) {
return NULL;
};
$arguments272 = [];
$arguments272['key'] = NULL;
$arguments272['id'] = NULL;
$arguments272['default'] = NULL;
$arguments272['arguments'] = NULL;
$arguments272['extensionName'] = NULL;
$arguments272['languageKey'] = NULL;
$arguments272['alternativeLanguageKeys'] = NULL;
$arguments272['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:flashmessage.no_results.message';
// Rendering Array
$array274 = [];
$array274['0'] = $renderingContext->getVariableProvider()->getByPath('searchTerm');
$arguments272['arguments'] = $array274;

$output267 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments272, $renderChildrenClosure273, $renderingContext)]);

$output267 .= '
                        </p>
                        <button type="submit" class="btn btn-info" name="searchTerm" value="">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure276 = function() use ($renderingContext) {
return NULL;
};
$arguments275 = [];
$arguments275['key'] = NULL;
$arguments275['id'] = NULL;
$arguments275['default'] = NULL;
$arguments275['arguments'] = NULL;
$arguments275['extensionName'] = NULL;
$arguments275['languageKey'] = NULL;
$arguments275['alternativeLanguageKeys'] = NULL;
$arguments275['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:search.reset';

$output267 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments275, $renderChildrenClosure276, $renderingContext)]);

$output267 .= '
                        </button>
                    ';
return $output267;
};
$arguments265['__elseClosures'][] = function() use ($renderingContext) {
$output277 = '';

$output277 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure279 = function() use ($renderingContext) {
return NULL;
};
$arguments278 = [];
$arguments278['identifier'] = NULL;
$arguments278['size'] = 'small';
$arguments278['overlay'] = NULL;
$arguments278['state'] = 'default';
$arguments278['alternativeMarkupIdentifier'] = NULL;
$arguments278['identifier'] = 'apps-pagetree-folder-contains';
$arguments278['size'] = 'large';

$output277 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments278, $renderChildrenClosure279, $renderingContext);

$output277 .= '
                        <h5 class="mt-2">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure281 = function() use ($renderingContext) {
return NULL;
};
$arguments280 = [];
$arguments280['key'] = NULL;
$arguments280['id'] = NULL;
$arguments280['default'] = NULL;
$arguments280['arguments'] = NULL;
$arguments280['extensionName'] = NULL;
$arguments280['languageKey'] = NULL;
$arguments280['alternativeLanguageKeys'] = NULL;
$arguments280['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:flashmessage.no_items';

$output277 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments280, $renderChildrenClosure281, $renderingContext)]);

$output277 .= '
                        </h5>
                        <p>
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure283 = function() use ($renderingContext) {
return NULL;
};
$arguments282 = [];
$arguments282['key'] = NULL;
$arguments282['id'] = NULL;
$arguments282['default'] = NULL;
$arguments282['arguments'] = NULL;
$arguments282['extensionName'] = NULL;
$arguments282['languageKey'] = NULL;
$arguments282['alternativeLanguageKeys'] = NULL;
$arguments282['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:flashmessage.no_items.message';
// Rendering Array
$array284 = [];
$array284['0'] = $renderingContext->getVariableProvider()->getByPath('searchTerm');
$arguments282['arguments'] = $array284;

$output277 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext)]);

$output277 .= '
                        </p>
                        <a href="';

$output277 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('fileUploadUrl')]);

$output277 .= '" class="btn btn-info t3js-drag-uploader-trigger">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure286 = function() use ($renderingContext) {
return NULL;
};
$arguments285 = [];
$arguments285['key'] = NULL;
$arguments285['id'] = NULL;
$arguments285['default'] = NULL;
$arguments285['arguments'] = NULL;
$arguments285['extensionName'] = NULL;
$arguments285['languageKey'] = NULL;
$arguments285['alternativeLanguageKeys'] = NULL;
$arguments285['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.upload';

$output277 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext)]);

$output277 .= '
                        </a>
                    ';
return $output277;
};

$output264 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext);

$output264 .= '
            </div>
        ';
return $output264;
};
$arguments260 = [];
$arguments260['then'] = NULL;
$arguments260['else'] = NULL;
$arguments260['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array262 = [];
$array262['0'] = '!';
$array262['1'] = $renderingContext->getVariableProvider()->getByPath('totalItems');

$expression263 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments260['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression263(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array262)
					),
					$renderingContext
				);
$arguments260['__thenClosure'] = $renderChildrenClosure261;

$output248 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output248 .= '
        <div class="t3-filelist-table-container ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure315 = function() use ($renderingContext) {
return NULL;
};
$arguments314 = [];
$arguments314['then'] = NULL;
$arguments314['else'] = NULL;
$arguments314['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array316 = [];
$array316['0'] = '!';
$array316['1'] = $renderingContext->getVariableProvider()->getByPath('totalItems');

$expression317 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments314['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression317(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array316)
					),
					$renderingContext
				);
$arguments314['then'] = 'hidden';

$output248 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext);

$output248 .= '">
            <div class="row row-cols-auto justify-content-between gx-0 multi-record-selection-actions-wrapper">
                <div class="col-auto">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure319 = function() use ($renderingContext) {
$output322 = '';

$output322 .= '
                        <div class="row row-cols-auto align-items-center g-2 t3js-multi-record-selection-actions hidden">
                            <div class="col">
                                <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure324 = function() use ($renderingContext) {
return NULL;
};
$arguments323 = [];
$arguments323['key'] = NULL;
$arguments323['id'] = NULL;
$arguments323['default'] = NULL;
$arguments323['arguments'] = NULL;
$arguments323['extensionName'] = NULL;
$arguments323['languageKey'] = NULL;
$arguments323['alternativeLanguageKeys'] = NULL;
$arguments323['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.selection';

$output322 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext)]);

$output322 .= '</strong>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-default btn-sm disabled" data-multi-record-selection-action="edit" data-multi-record-selection-action-config="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure326 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('editActionConfiguration');
};
$arguments325 = [];
$arguments325['value'] = NULL;

$output322 .= isset($arguments325['value']) ? $arguments325['value'] : $renderChildrenClosure326();

$output322 .= '">
                                <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure328 = function() use ($renderingContext) {
return NULL;
};
$arguments327 = [];
$arguments327['key'] = NULL;
$arguments327['id'] = NULL;
$arguments327['default'] = NULL;
$arguments327['arguments'] = NULL;
$arguments327['extensionName'] = NULL;
$arguments327['languageKey'] = NULL;
$arguments327['alternativeLanguageKeys'] = NULL;
$arguments327['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:editMarked';

$output322 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments327, $renderChildrenClosure328, $renderingContext)]);

$output322 .= '">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure330 = function() use ($renderingContext) {
return NULL;
};
$arguments329 = [];
$arguments329['identifier'] = NULL;
$arguments329['size'] = 'small';
$arguments329['overlay'] = NULL;
$arguments329['state'] = 'default';
$arguments329['alternativeMarkupIdentifier'] = NULL;
$arguments329['identifier'] = 'actions-open';
$arguments329['size'] = 'small';

$output322 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments329, $renderChildrenClosure330, $renderingContext);

$output322 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure332 = function() use ($renderingContext) {
return NULL;
};
$arguments331 = [];
$arguments331['key'] = NULL;
$arguments331['id'] = NULL;
$arguments331['default'] = NULL;
$arguments331['arguments'] = NULL;
$arguments331['extensionName'] = NULL;
$arguments331['languageKey'] = NULL;
$arguments331['alternativeLanguageKeys'] = NULL;
$arguments331['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:editMarked';

$output322 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments331, $renderChildrenClosure332, $renderingContext)]);

$output322 .= '
                                </span>
                                </button>
                            </div>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure334 = function() use ($renderingContext) {
$output337 = '';

$output337 .= '
                                <div class="col">
                                    <button type="button" class="btn btn-default btn-sm" data-multi-record-selection-action="download" data-multi-record-selection-action-config="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure339 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('downloadActionConfiguration');
};
$arguments338 = [];
$arguments338['value'] = NULL;

$output337 .= isset($arguments338['value']) ? $arguments338['value'] : $renderChildrenClosure339();

$output337 .= '">
                                        <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure341 = function() use ($renderingContext) {
return NULL;
};
$arguments340 = [];
$arguments340['key'] = NULL;
$arguments340['id'] = NULL;
$arguments340['default'] = NULL;
$arguments340['arguments'] = NULL;
$arguments340['extensionName'] = NULL;
$arguments340['languageKey'] = NULL;
$arguments340['alternativeLanguageKeys'] = NULL;
$arguments340['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:download';

$output337 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments340, $renderChildrenClosure341, $renderingContext)]);

$output337 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure343 = function() use ($renderingContext) {
return NULL;
};
$arguments342 = [];
$arguments342['identifier'] = NULL;
$arguments342['size'] = 'small';
$arguments342['overlay'] = NULL;
$arguments342['state'] = 'default';
$arguments342['alternativeMarkupIdentifier'] = NULL;
$arguments342['identifier'] = 'actions-download';
$arguments342['size'] = 'small';

$output337 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments342, $renderChildrenClosure343, $renderingContext);

$output337 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure345 = function() use ($renderingContext) {
return NULL;
};
$arguments344 = [];
$arguments344['key'] = NULL;
$arguments344['id'] = NULL;
$arguments344['default'] = NULL;
$arguments344['arguments'] = NULL;
$arguments344['extensionName'] = NULL;
$arguments344['languageKey'] = NULL;
$arguments344['alternativeLanguageKeys'] = NULL;
$arguments344['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang.xlf:download';

$output337 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments344, $renderChildrenClosure345, $renderingContext)]);

$output337 .= '
                                        </span>
                                    </button>
                                </div>
                            ';
return $output337;
};
$arguments333 = [];
$arguments333['then'] = NULL;
$arguments333['else'] = NULL;
$arguments333['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array335 = [];
$array335['0'] = $renderingContext->getVariableProvider()->getByPath('downloadActionConfiguration');

$expression336 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments333['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression336(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array335)
					),
					$renderingContext
				);
$arguments333['__thenClosure'] = $renderChildrenClosure334;

$output322 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments333, $renderChildrenClosure334, $renderingContext);

$output322 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure347 = function() use ($renderingContext) {
$output350 = '';

$output350 .= '
                                <div class="col">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure352 = function() use ($renderingContext) {
return NULL;
};
$arguments351 = [];
$arguments351['then'] = NULL;
$arguments351['else'] = NULL;
$arguments351['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array353 = [];
$array353['0'] = $renderingContext->getVariableProvider()->getByPath('enableClipBoard.mode');
$array353['1'] = ' == normal';

$expression354 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "normal");};
$arguments351['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression354(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array353)
					),
					$renderingContext
				);
$arguments351['then'] = 'disabled';

$output350 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext);

$output350 .= '" data-multi-record-selection-action="copyMarked">
                                        <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure356 = function() use ($renderingContext) {
return NULL;
};
$arguments355 = [];
$arguments355['key'] = NULL;
$arguments355['id'] = NULL;
$arguments355['default'] = NULL;
$arguments355['arguments'] = NULL;
$arguments355['extensionName'] = NULL;
$arguments355['languageKey'] = NULL;
$arguments355['alternativeLanguageKeys'] = NULL;
$arguments355['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:clip_selectMarked';

$output350 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments355, $renderChildrenClosure356, $renderingContext)]);

$output350 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure358 = function() use ($renderingContext) {
return NULL;
};
$arguments357 = [];
$arguments357['identifier'] = NULL;
$arguments357['size'] = 'small';
$arguments357['overlay'] = NULL;
$arguments357['state'] = 'default';
$arguments357['alternativeMarkupIdentifier'] = NULL;
$arguments357['identifier'] = 'actions-edit-copy';
$arguments357['size'] = 'small';

$output350 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments357, $renderChildrenClosure358, $renderingContext);

$output350 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure360 = function() use ($renderingContext) {
return NULL;
};
$arguments359 = [];
$arguments359['key'] = NULL;
$arguments359['id'] = NULL;
$arguments359['default'] = NULL;
$arguments359['arguments'] = NULL;
$arguments359['extensionName'] = NULL;
$arguments359['languageKey'] = NULL;
$arguments359['alternativeLanguageKeys'] = NULL;
$arguments359['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:clip_selectMarked';

$output350 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments359, $renderChildrenClosure360, $renderingContext)]);

$output350 .= '
                                        </span>
                                        </button>
                                        <button type="button" class="btn btn-default btn-sm ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure362 = function() use ($renderingContext) {
return NULL;
};
$arguments361 = [];
$arguments361['then'] = NULL;
$arguments361['else'] = NULL;
$arguments361['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array363 = [];
$array363['0'] = $renderingContext->getVariableProvider()->getByPath('enableClipBoard.mode');
$array363['1'] = ' == normal';

$expression364 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "normal");};
$arguments361['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression364(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array363)
					),
					$renderingContext
				);
$arguments361['then'] = 'disabled';

$output350 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments361, $renderChildrenClosure362, $renderingContext);

$output350 .= '" data-multi-record-selection-action="removeMarked">
                                        <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure366 = function() use ($renderingContext) {
return NULL;
};
$arguments365 = [];
$arguments365['key'] = NULL;
$arguments365['id'] = NULL;
$arguments365['default'] = NULL;
$arguments365['arguments'] = NULL;
$arguments365['extensionName'] = NULL;
$arguments365['languageKey'] = NULL;
$arguments365['alternativeLanguageKeys'] = NULL;
$arguments365['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:clip_deleteMarked';

$output350 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext)]);

$output350 .= '">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure368 = function() use ($renderingContext) {
return NULL;
};
$arguments367 = [];
$arguments367['identifier'] = NULL;
$arguments367['size'] = 'small';
$arguments367['overlay'] = NULL;
$arguments367['state'] = 'default';
$arguments367['alternativeMarkupIdentifier'] = NULL;
$arguments367['identifier'] = 'actions-remove';
$arguments367['size'] = 'small';

$output350 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments367, $renderChildrenClosure368, $renderingContext);

$output350 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure370 = function() use ($renderingContext) {
return NULL;
};
$arguments369 = [];
$arguments369['key'] = NULL;
$arguments369['id'] = NULL;
$arguments369['default'] = NULL;
$arguments369['arguments'] = NULL;
$arguments369['extensionName'] = NULL;
$arguments369['languageKey'] = NULL;
$arguments369['alternativeLanguageKeys'] = NULL;
$arguments369['key'] = 'LLL:EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf:clip_deleteMarked';

$output350 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments369, $renderChildrenClosure370, $renderingContext)]);

$output350 .= '
                                        </span>
                                        </button>
                                    </div>
                                </div>
                            ';
return $output350;
};
$arguments346 = [];
$arguments346['then'] = NULL;
$arguments346['else'] = NULL;
$arguments346['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array348 = [];
$array348['0'] = $renderingContext->getVariableProvider()->getByPath('showClipboardPanel');
$array348['1'] = ' && ';
$array348['2'] = $renderingContext->getVariableProvider()->getByPath('enableClipBoard.mode');
$array348['3'] = ' != \'normal\'';

$expression349 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) != 'normal'));};
$arguments346['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression349(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array348)
					),
					$renderingContext
				);
$arguments346['__thenClosure'] = $renderChildrenClosure347;

$output322 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext);

$output322 .= '
                            <div class="col">
                                <button type="button" class="btn btn-default btn-sm" data-multi-record-selection-action="delete" data-multi-record-selection-action-config="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure372 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('deleteActionConfiguration');
};
$arguments371 = [];
$arguments371['value'] = NULL;

$output322 .= isset($arguments371['value']) ? $arguments371['value'] : $renderChildrenClosure372();

$output322 .= '">
                                <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure374 = function() use ($renderingContext) {
return NULL;
};
$arguments373 = [];
$arguments373['key'] = NULL;
$arguments373['id'] = NULL;
$arguments373['default'] = NULL;
$arguments373['arguments'] = NULL;
$arguments373['extensionName'] = NULL;
$arguments373['languageKey'] = NULL;
$arguments373['alternativeLanguageKeys'] = NULL;
$arguments373['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.delete';

$output322 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments373, $renderChildrenClosure374, $renderingContext)]);

$output322 .= '">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure376 = function() use ($renderingContext) {
return NULL;
};
$arguments375 = [];
$arguments375['identifier'] = NULL;
$arguments375['size'] = 'small';
$arguments375['overlay'] = NULL;
$arguments375['state'] = 'default';
$arguments375['alternativeMarkupIdentifier'] = NULL;
$arguments375['identifier'] = 'actions-edit-delete';
$arguments375['size'] = 'small';

$output322 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments375, $renderChildrenClosure376, $renderingContext);

$output322 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure378 = function() use ($renderingContext) {
return NULL;
};
$arguments377 = [];
$arguments377['key'] = NULL;
$arguments377['id'] = NULL;
$arguments377['default'] = NULL;
$arguments377['arguments'] = NULL;
$arguments377['extensionName'] = NULL;
$arguments377['languageKey'] = NULL;
$arguments377['alternativeLanguageKeys'] = NULL;
$arguments377['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:cm.delete';

$output322 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments377, $renderChildrenClosure378, $renderingContext)]);

$output322 .= '
                                </span>
                                </button>
                            </div>
                        </div>
                    ';
return $output322;
};
$arguments318 = [];
$arguments318['then'] = NULL;
$arguments318['else'] = NULL;
$arguments318['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array320 = [];
$array320['0'] = $renderingContext->getVariableProvider()->getByPath('listHtml');

$expression321 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments318['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression321(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array320)
					),
					$renderingContext
				);
$arguments318['__thenClosure'] = $renderChildrenClosure319;

$output248 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments318, $renderChildrenClosure319, $renderingContext);

$output248 .= '
                </div>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure380 = function() use ($renderingContext) {
$output383 = '';

$output383 .= '
                    <div class="col-auto">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure385 = function() use ($renderingContext) {
$output388 = '';

$output388 .= '
                            <div class="row row-cols-auto align-items-center gx-3">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure390 = function() use ($renderingContext) {
$output393 = '';

$output393 .= '
                                    <div class="col">
                                        <typo3-backend-column-selector-button
                                            url="';

$output393 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('columnSelector.url')]);

$output393 .= '"
                                            target="';

$output393 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('listUrl')]);

$output393 .= '"
                                            title="';

$output393 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('columnSelector.title')]);

$output393 .= '"
                                            ok="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure395 = function() use ($renderingContext) {
return NULL;
};
$arguments394 = [];
$arguments394['key'] = NULL;
$arguments394['id'] = NULL;
$arguments394['default'] = NULL;
$arguments394['arguments'] = NULL;
$arguments394['extensionName'] = NULL;
$arguments394['languageKey'] = NULL;
$arguments394['alternativeLanguageKeys'] = NULL;
$arguments394['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_column_selector.xlf:updateColumnView';

$output393 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments394, $renderChildrenClosure395, $renderingContext)]);

$output393 .= '"
                                            close="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure397 = function() use ($renderingContext) {
return NULL;
};
$arguments396 = [];
$arguments396['key'] = NULL;
$arguments396['id'] = NULL;
$arguments396['default'] = NULL;
$arguments396['arguments'] = NULL;
$arguments396['extensionName'] = NULL;
$arguments396['languageKey'] = NULL;
$arguments396['alternativeLanguageKeys'] = NULL;
$arguments396['key'] = 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.cancel';

$output393 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext)]);

$output393 .= '"
                                            error="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure399 = function() use ($renderingContext) {
return NULL;
};
$arguments398 = [];
$arguments398['key'] = NULL;
$arguments398['id'] = NULL;
$arguments398['default'] = NULL;
$arguments398['arguments'] = NULL;
$arguments398['extensionName'] = NULL;
$arguments398['languageKey'] = NULL;
$arguments398['alternativeLanguageKeys'] = NULL;
$arguments398['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_column_selector.xlf:updateColumnView.error';

$output393 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments398, $renderChildrenClosure399, $renderingContext)]);

$output393 .= '">
                                            <button type="button" class="btn btn-default btn-sm" title="';

$output393 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('columnSelector.title')]);

$output393 .= '">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure401 = function() use ($renderingContext) {
return NULL;
};
$arguments400 = [];
$arguments400['identifier'] = NULL;
$arguments400['size'] = 'small';
$arguments400['overlay'] = NULL;
$arguments400['state'] = 'default';
$arguments400['alternativeMarkupIdentifier'] = NULL;
$arguments400['identifier'] = 'actions-options';
$arguments400['size'] = 'small';

$output393 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments400, $renderChildrenClosure401, $renderingContext);

$output393 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure403 = function() use ($renderingContext) {
return NULL;
};
$arguments402 = [];
$arguments402['key'] = NULL;
$arguments402['id'] = NULL;
$arguments402['default'] = NULL;
$arguments402['arguments'] = NULL;
$arguments402['extensionName'] = NULL;
$arguments402['languageKey'] = NULL;
$arguments402['alternativeLanguageKeys'] = NULL;
$arguments402['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_column_selector.xlf:showColumns';

$output393 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments402, $renderChildrenClosure403, $renderingContext)]);

$output393 .= '
                                            </button>
                                        </typo3-backend-column-selector-button>
                                    </div>
                                ';
return $output393;
};
$arguments389 = [];
$arguments389['then'] = NULL;
$arguments389['else'] = NULL;
$arguments389['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array391 = [];
$array391['0'] = $renderingContext->getVariableProvider()->getByPath('columnSelector');

$expression392 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments389['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression392(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array391)
					),
					$renderingContext
				);
$arguments389['__thenClosure'] = $renderChildrenClosure390;

$output388 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments389, $renderChildrenClosure390, $renderingContext);

$output388 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure405 = function() use ($renderingContext) {
$output408 = '';

$output408 .= '
                                    <div class="col">
                                        <div class="form-check form-switch mb-0">
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure410 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('displayThumbs.html');
};
$arguments409 = [];
$arguments409['value'] = NULL;

$output408 .= isset($arguments409['value']) ? $arguments409['value'] : $renderChildrenClosure410();

$output408 .= '
                                            <label for="checkDisplayThumbs" class="form-check-label">
                                                ';

$output408 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('displayThumbs.label')]);

$output408 .= '
                                            </label>
                                        </div>
                                    </div>
                                ';
return $output408;
};
$arguments404 = [];
$arguments404['then'] = NULL;
$arguments404['else'] = NULL;
$arguments404['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array406 = [];
$array406['0'] = $renderingContext->getVariableProvider()->getByPath('displayThumbs.enabled');

$expression407 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments404['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression407(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array406)
					),
					$renderingContext
				);
$arguments404['__thenClosure'] = $renderChildrenClosure405;

$output388 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments404, $renderChildrenClosure405, $renderingContext);

$output388 .= '
                            </div>
                        ';
return $output388;
};
$arguments384 = [];
$arguments384['then'] = NULL;
$arguments384['else'] = NULL;
$arguments384['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array386 = [];
$array386['0'] = $renderingContext->getVariableProvider()->getByPath('columnSelector');
$array386['1'] = ' || ';
$array386['2'] = $renderingContext->getVariableProvider()->getByPath('displayThumbs.enabled');

$expression387 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments384['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression387(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array386)
					),
					$renderingContext
				);
$arguments384['__thenClosure'] = $renderChildrenClosure385;

$output383 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments384, $renderChildrenClosure385, $renderingContext);

$output383 .= '
                    </div>
                ';
return $output383;
};
$arguments379 = [];
$arguments379['then'] = NULL;
$arguments379['else'] = NULL;
$arguments379['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array381 = [];
$array381['0'] = $renderingContext->getVariableProvider()->getByPath('listHtml');

$expression382 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments379['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression382(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array381)
					),
					$renderingContext
				);
$arguments379['__thenClosure'] = $renderChildrenClosure380;

$output248 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments379, $renderChildrenClosure380, $renderingContext);

$output248 .= '
            </div>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure412 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('listHtml');
};
$arguments411 = [];
$arguments411['value'] = NULL;

$output248 .= isset($arguments411['value']) ? $arguments411['value'] : $renderChildrenClosure412();

$output248 .= '
        </div>
    </form>

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure414 = function() use ($renderingContext) {
$output417 = '';

$output417 .= '
        <div class="mb-3">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure419 = function() use ($renderingContext) {
$output422 = '';

$output422 .= '
                <div class="form-check form-switch">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure424 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('enableClipBoard.html');
};
$arguments423 = [];
$arguments423['value'] = NULL;

$output422 .= isset($arguments423['value']) ? $arguments423['value'] : $renderChildrenClosure424();

$output422 .= '
                    <label for="checkClipBoard" class="form-check-label">
                        ';

$output422 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('enableClipBoard.label')]);

$output422 .= '
                    </label>
                </div>
            ';
return $output422;
};
$arguments418 = [];
$arguments418['then'] = NULL;
$arguments418['else'] = NULL;
$arguments418['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array420 = [];
$array420['0'] = $renderingContext->getVariableProvider()->getByPath('enableClipBoard.enabled');

$expression421 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments418['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression421(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array420)
					),
					$renderingContext
				);
$arguments418['__thenClosure'] = $renderChildrenClosure419;

$output417 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments418, $renderChildrenClosure419, $renderingContext);

$output417 .= '
        </div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure426 = function() use ($renderingContext) {
$output429 = '';

$output429 .= '
            <typo3-backend-clipboard-panel return-url="';

$output429 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('listUrl')]);

$output429 .= '" table="_FILE"></typo3-backend-clipboard-panel>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\CshViewHelper
$renderChildrenClosure431 = function() use ($renderingContext) {
return NULL;
};
$arguments430 = [];
$arguments430['table'] = NULL;
$arguments430['field'] = '';
$arguments430['wrap'] = '';
$arguments430['table'] = 'xMOD_csh_corebe';
$arguments430['field'] = 'filelist_clipboard';
$arguments430['wrap'] = '<span class=\'btn btn-sm btn-default\'>|</span>';

$output429 .= TYPO3\CMS\Fluid\ViewHelpers\Be\Buttons\CshViewHelper::renderStatic($arguments430, $renderChildrenClosure431, $renderingContext);

$output429 .= '
        ';
return $output429;
};
$arguments425 = [];
$arguments425['then'] = NULL;
$arguments425['else'] = NULL;
$arguments425['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array427 = [];
$array427['0'] = $renderingContext->getVariableProvider()->getByPath('showClipboardPanel');

$expression428 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments425['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression428(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array427)
					),
					$renderingContext
				);
$arguments425['__thenClosure'] = $renderChildrenClosure426;

$output417 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments425, $renderChildrenClosure426, $renderingContext);

$output417 .= '
    ';
return $output417;
};
$arguments413 = [];
$arguments413['then'] = NULL;
$arguments413['else'] = NULL;
$arguments413['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array415 = [];
$array415['0'] = $renderingContext->getVariableProvider()->getByPath('listHtml');

$expression416 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments413['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression416(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array415)
					),
					$renderingContext
				);
$arguments413['__thenClosure'] = $renderChildrenClosure414;

$output248 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments413, $renderChildrenClosure414, $renderingContext);

$output248 .= '
';
return $output248;
};
$arguments246 = [];
$arguments246['name'] = NULL;
$arguments246['name'] = 'content';

$output204 .= '';

$output204 .= '
';

return $output204;
}


}
#