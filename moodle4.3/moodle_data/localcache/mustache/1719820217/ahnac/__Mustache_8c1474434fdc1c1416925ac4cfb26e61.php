<?php

class __Mustache_8c1474434fdc1c1416925ac4cfb26e61 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="audience-card" class="instance-card" data-audience-id="';
        $value = $this->resolveValue($context->find('instanceid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-audience-title="';
        $value = $this->resolveValue($context->find('heading'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $value = $context->find('editwarning');
        $buffer .= $this->section058b9ee7a047391c78c6d158a8a398ce($context, $indent, $value);
        $buffer .= $indent . '>
';
        $value = $context->find('showormessage');
        $buffer .= $this->sectionE947a7ead2e56ba2cabcca9247b84be5($context, $indent, $value);
        $buffer .= $indent . '    <div class="mb-3 card">
';
        $buffer .= $indent . '        <div class="card-header p-0">
';
        $buffer .= $indent . '            <div class="mb-0 d-flex">
';
        $buffer .= $indent . '                <h3 class="h6 text-left m-0 align-self-center pl-3" data-region="audience-heading">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('headingeditable'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </h3>
';
        $buffer .= $indent . '                <span class="ml-auto">
';
        $value = $context->find('canedit');
        $buffer .= $this->sectionB7cdcb4cd2630e69d4f5d98dd55d26f5($context, $indent, $value);
        $value = $context->find('candelete');
        $buffer .= $this->sectionC6228f514b095125db3b671c8df8a2a8($context, $indent, $value);
        $buffer .= $indent . '                </span>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="card-body p-3" data-region="audience-form">
';
        $buffer .= $indent . '            ';
        $value = $context->find('editwarning');
        $buffer .= $this->sectionCfc05a891c3aee842590ec90e142cb64($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            <div data-region="audience-description" ';
        $value = $context->find('description');
        if (empty($value)) {
            
            $buffer .= 'class="hidden"';
        }
        $buffer .= '>
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('description'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div data-region="audience-form-container" ';
        $value = $context->find('form');
        if (empty($value)) {
            
            $buffer .= 'class="hidden"';
        }
        $buffer .= '>
';
        $buffer .= $indent . '                <div class="alert alert-warning p-2" data-region="audience-not-saved">';
        $value = $context->find('str');
        $buffer .= $this->section5045095324f8a3bf759fffa748c0740a($context, $indent, $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('form'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section058b9ee7a047391c78c6d158a8a398ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        data-audience-edit-warning="1"
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        data-audience-edit-warning="1"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF3079fc75b140cdb2c6f704a61541d99(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' or, core_reportbuilder ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' or, core_reportbuilder ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE947a7ead2e56ba2cabcca9247b84be5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="audience-separator d-flex mb-3 justify-content-center align-items-center small text-muted font-weight-bold">
            {{#str}} or, core_reportbuilder {{/str}}
        </span>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <span class="audience-separator d-flex mb-3 justify-content-center align-items-center small text-muted font-weight-bold">
';
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->sectionF3079fc75b140cdb2c6f704a61541d99($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8bb5161e5d4bbaf832f59bdb1c23318e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' editaudience, core_reportbuilder, {{heading}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' editaudience, core_reportbuilder, ';
                $value = $this->resolveValue($context->find('heading'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7680c9ab48e1615ec8d80b97eeaa59cd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/settings, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/settings, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB7cdcb4cd2630e69d4f5d98dd55d26f5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <button class="btn btn-link px-0"
                                data-action="edit-audience"
                                title="{{#str}} editaudience, core_reportbuilder, {{heading}} {{/str}}"
                                aria-label="{{#str}} editaudience, core_reportbuilder, {{heading}} {{/str}}"
                                {{^description}}disabled{{/description}}>
                            {{#pix}} i/settings, core {{/pix}}
                        </button>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <button class="btn btn-link px-0"
';
                $buffer .= $indent . '                                data-action="edit-audience"
';
                $buffer .= $indent . '                                title="';
                $value = $context->find('str');
                $buffer .= $this->section8bb5161e5d4bbaf832f59bdb1c23318e($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section8bb5161e5d4bbaf832f59bdb1c23318e($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                ';
                $value = $context->find('description');
                if (empty($value)) {
                    
                    $buffer .= 'disabled';
                }
                $buffer .= '>
';
                $buffer .= $indent . '                            ';
                $value = $context->find('pix');
                $buffer .= $this->section7680c9ab48e1615ec8d80b97eeaa59cd($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section00c3116a718afbbbaca3b547efc3b799(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' deleteaudience, core_reportbuilder, {{heading}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' deleteaudience, core_reportbuilder, ';
                $value = $this->resolveValue($context->find('heading'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0601b851dc2d09e2cc0679821ca5710a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/trash, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/trash, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC6228f514b095125db3b671c8df8a2a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <button class="btn btn-link px-0 mr-2"
                                data-action="delete-audience"
                                title="{{#str}} deleteaudience, core_reportbuilder, {{heading}} {{/str}}"
                                aria-label="{{#str}} deleteaudience, core_reportbuilder, {{heading}} {{/str}}"
                                {{^description}}disabled{{/description}}>
                            {{#pix}} i/trash, core {{/pix}}
                        </button>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <button class="btn btn-link px-0 mr-2"
';
                $buffer .= $indent . '                                data-action="delete-audience"
';
                $buffer .= $indent . '                                title="';
                $value = $context->find('str');
                $buffer .= $this->section00c3116a718afbbbaca3b547efc3b799($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section00c3116a718afbbbaca3b547efc3b799($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                ';
                $value = $context->find('description');
                if (empty($value)) {
                    
                    $buffer .= 'disabled';
                }
                $buffer .= '>
';
                $buffer .= $indent . '                            ';
                $value = $context->find('pix');
                $buffer .= $this->section0601b851dc2d09e2cc0679821ca5710a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCfc05a891c3aee842590ec90e142cb64(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="alert alert-warning p-2">{{.}}</div>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<div class="alert alert-warning p-2">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5045095324f8a3bf759fffa748c0740a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' audiencenotsaved, core_reportbuilder ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' audiencenotsaved, core_reportbuilder ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
