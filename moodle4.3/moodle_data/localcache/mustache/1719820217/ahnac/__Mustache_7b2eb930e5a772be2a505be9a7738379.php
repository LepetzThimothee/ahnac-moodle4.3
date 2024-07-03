<?php

class __Mustache_7b2eb930e5a772be2a505be9a7738379 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<footer id="page-footer" class="footer-popover">
';
        $buffer .= $indent . '    <div data-region="footer-container-popover">
';
        $value = $context->findDot('output.has_communication_links');
        $buffer .= $this->sectionDf729426358fc42f1fac59c31f2b1bc5($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="footer-content-popover container" data-region="footer-content-popover">
';
        $buffer .= $indent . '        <div class="col-lg-6 p-3 ahnac-information">
';
        $buffer .= $indent . '            <div class="ahnac-logo">
';
        $value = $context->findDot('output.should_display_navbar_logo');
        $buffer .= $this->section3e56d9ee5adf726015eabafd614dafa1($context, $indent, $value);
        $value = $context->findDot('output.should_display_navbar_logo');
        if (empty($value)) {
            
            $buffer .= $indent . '                    ';
            $value = $this->resolveValue($context->find('sitename'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="information-text">
';
        $buffer .= $indent . '                <p>';
        $value = $context->find('str');
        $buffer .= $this->sectionC236ed9488f1e6d12878a8809cdaa551($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '                <p>';
        $value = $context->find('str');
        $buffer .= $this->sectionB269a6bcba648f462408c1b940a88970($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '                <p>';
        $value = $context->find('str');
        $buffer .= $this->sectionAc5a7a4ee4e469627ca1d91a5262285a($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '            </div>
';
        $value = $context->findDot('output.has_communication_links');
        $buffer .= $this->section626dc9628e0dc0febd458f0053b5a134($context, $indent, $value);
        $value = $context->findDot('output.has_popover_links');
        $buffer .= $this->sectionC18ab875570c756c82ab0b55d1396695($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="col-lg-2 footer-section p-3 border-bottom">
';
        $buffer .= $indent . '            <div class="sitemap footer-top">
';
        $buffer .= $indent . '                <h4>';
        $value = $context->find('str');
        $buffer .= $this->section9aef6ea52f9aeadf76f178a44870e87a($context, $indent, $value);
        $buffer .= '</h4>
';
        $buffer .= $indent . '                <ul>   
';
        $buffer .= $indent . '                    <li class="mb-2"><a href="';
        $value = $context->find('str');
        $buffer .= $this->sectionE9b5aaa53d0be29435cc61cf6c04096c($context, $indent, $value);
        $buffer .= '">';
        $value = $context->find('str');
        $buffer .= $this->sectionD9b7e8e788641fcdae14636ae4b0a997($context, $indent, $value);
        $buffer .= '</a></li>
';
        $buffer .= $indent . '                    <li class="mb-2"><a href="';
        $value = $context->find('str');
        $buffer .= $this->sectionC6b953d5439a12f43a795510abb5527e($context, $indent, $value);
        $buffer .= '">';
        $value = $context->find('str');
        $buffer .= $this->section09249bc280b51817f143ab0986f52e35($context, $indent, $value);
        $buffer .= '</a></li>
';
        $buffer .= $indent . '                    <li class="mb-2"><a href="';
        $value = $context->find('str');
        $buffer .= $this->section1702e14d3f8c545d02b5e2c027dab763($context, $indent, $value);
        $buffer .= '">';
        $value = $context->find('str');
        $buffer .= $this->section3a7c266e50fb07ee2ea0fcb7764e5923($context, $indent, $value);
        $buffer .= '</a></li>
';
        $buffer .= $indent . '                </ul>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="footer-bottom">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="col-lg-2 footer-section p-3 border-bottom">
';
        $buffer .= $indent . '            <div class="social-media footer-top">
';
        $buffer .= $indent . '                <h4>';
        $value = $context->find('str');
        $buffer .= $this->section6ad769213f0264a3f15525ebd93f572b($context, $indent, $value);
        $buffer .= '</h4>
';
        $buffer .= $indent . '                <ul>
';
        $buffer .= $indent . '                    <li class="mb-3"><a href="https://www.facebook.com/groupeahnac/"><i class="fab fa-facebook"></i>';
        $value = $context->find('str');
        $buffer .= $this->section72be86b82e930d6f1a57b863b60098f3($context, $indent, $value);
        $buffer .= '</a></li>
';
        $buffer .= $indent . '                    <li class="mb-3"><a href="https://www.instagram.com/groupe.ahnac/"><i class="fab fa-instagram"></i>';
        $value = $context->find('str');
        $buffer .= $this->section29644c283e78e162f7893617af62cee8($context, $indent, $value);
        $buffer .= '</a></li>
';
        $buffer .= $indent . '                    <li class="mb-3"><a href="https://twitter.com/GroupeAhnac"><i class="fab fa-twitter"></i>';
        $value = $context->find('str');
        $buffer .= $this->section97509ac7d1478acc7e703a0b151f7834($context, $indent, $value);
        $buffer .= '</a></li>
';
        $buffer .= $indent . '                    <li class="mb-3"><a href="https://www.youtube.com/@groupeahnac1621"><i class="fab fa-youtube"></i>';
        $value = $context->find('str');
        $buffer .= $this->sectionEc02af9b98ad839dee7c60cd2174f103($context, $indent, $value);
        $buffer .= '</a></li>
';
        $buffer .= $indent . '                    <li class="mb-3"><a href="https://fr.linkedin.com/company/groupe-ahnac"><i class="fab fa-linkedin"></i>';
        $value = $context->find('str');
        $buffer .= $this->section12222920f5d041018cefc6bd57b101a0($context, $indent, $value);
        $buffer .= '</a></li>
';
        $buffer .= $indent . '                </ul>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="logininfo footer-bottom">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->findDot('output.login_info'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="tool_usertours-resettourcontainer">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="col-lg-2 footer-section p-3 border-bottom">
';
        $buffer .= $indent . '            <div class="other footer-top">
';
        $buffer .= $indent . '                <h4>';
        $value = $context->find('str');
        $buffer .= $this->section8f04c6a170b2c9cdc36ca23a51b7cb0d($context, $indent, $value);
        $buffer .= '</h4>
';
        $buffer .= $indent . '                <ul>
';
        $buffer .= $indent . '                    <li class="mb-2"><a href="https://www.ahnac.com/podcasts/">';
        $value = $context->find('str');
        $buffer .= $this->section7931c89d881aedbc15fdcc9f4a1d2a12($context, $indent, $value);
        $buffer .= '</a></li>
';
        $buffer .= $indent . '                    <li class="mb-2"><a href="https://my.ahnac.com/login">';
        $value = $context->find('str');
        $buffer .= $this->sectionE4a39b9df7356eb0511e763aa12bd74c($context, $indent, $value);
        $buffer .= '</a></li>
';
        $buffer .= $indent . '                    <li class="mb-2"><a href="https://app.bluekango.com/groupe_ahnac/index.php/app/intranet/home">';
        $value = $context->find('str');
        $buffer .= $this->sectionD6b4e290c7700b8d9a5c4be737f1c1f4($context, $indent, $value);
        $buffer .= '</a></li>
';
        $buffer .= $indent . '                </ul>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="footer-bottom">';
        $value = $context->find('str');
        $buffer .= $this->sectionAa8f35454d5446cdca5be017597386a4($context, $indent, $value);
        $buffer .= '</div>
';
        $value = $context->findDot('output.moodle_release');
        $buffer .= $this->sectionE9e844303d96fe0e0d25e2157a7e3f5e($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="footer-content-debugging footer-dark bg-dark text-light">
';
        $buffer .= $indent . '        <div class="container-fluid footer-dark-inner">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->findDot('output.debug_footer_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</footer>
';
        $value = $context->find('js');
        $buffer .= $this->sectionB60a5f65013c307b4cb66614d8cf1e1d($context, $indent, $value);

        return $buffer;
    }

    private function section153dc31b52f3d9f5ab10d3c2b767c871(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'communicationroomlink, course, theme_ahnac';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'communicationroomlink, course, theme_ahnac';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section860fe5efd27e2c99776d92b09bfc4939(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/messages-o, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/messages-o, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf729426358fc42f1fac59c31f2b1bc5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <button onclick="window.open(\'{{output.communication_url}}\', \'_blank\', \'noreferrer\')" class="btn btn-icon bg-primary text-white icon-no-margin btn-footer-communication" aria-label="{{#str}}communicationroomlink, course, theme_ahnac{{/str}}">
                {{#pix}}t/messages-o, core{{/pix}}
            </button>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <button onclick="window.open(\'';
                $value = $this->resolveValue($context->findDot('output.communication_url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\', \'_blank\', \'noreferrer\')" class="btn btn-icon bg-primary text-white icon-no-margin btn-footer-communication" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section153dc31b52f3d9f5ab10d3c2b767c871($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                ';
                $value = $context->find('pix');
                $buffer .= $this->section860fe5efd27e2c99776d92b09bfc4939($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3e56d9ee5adf726015eabafd614dafa1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <img src="{{output.get_logo_url}}" class="logo mr-1" alt="{{sitename}}">
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <img src="';
                $value = $this->resolveValue($context->findDot('output.get_logo_url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="logo mr-1" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC236ed9488f1e6d12878a8809cdaa551(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'ahnacinfo1, theme_ahnac';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'ahnacinfo1, theme_ahnac';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB269a6bcba648f462408c1b940a88970(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'ahnacinfo2, theme_ahnac';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'ahnacinfo2, theme_ahnac';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAc5a7a4ee4e469627ca1d91a5262285a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'ahnacinfo3, theme_ahnac';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'ahnacinfo3, theme_ahnac';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section626dc9628e0dc0febd458f0053b5a134(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="footer-section p-3 border-bottom footer-link-communication">
                    <div class="footer-support-link">{{{ output.communication_link }}}</div>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="footer-section p-3 border-bottom footer-link-communication">
';
                $buffer .= $indent . '                    <div class="footer-support-link">';
                $value = $this->resolveValue($context->findDot('output.communication_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE3c74287c07480ba1dd4fc7e40fad08c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="footer-support-link">{{{ output.page_doc_link }}}</div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="footer-support-link">';
                $value = $this->resolveValue($context->findDot('output.page_doc_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section99a892a6723679801f5a14bbbc306305(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="footer-support-link">{{{ output.services_support_link }}}</div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="footer-support-link">';
                $value = $this->resolveValue($context->findDot('output.services_support_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c810693e5c3a7387fdc3e08f074a6c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="footer-support-link">{{{ output.supportemail }}}</div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="footer-support-link">';
                $value = $this->resolveValue($context->findDot('output.supportemail'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC18ab875570c756c82ab0b55d1396695(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="footer-section p-3 border-bottom">
                    {{# output.page_doc_link }}
                        <div class="footer-support-link">{{{ output.page_doc_link }}}</div>
                    {{/ output.page_doc_link }}

                    {{# output.services_support_link }}
                        <div class="footer-support-link">{{{ output.services_support_link }}}</div>
                    {{/ output.services_support_link }}

                    {{# output.supportemail }}
                        <div class="footer-support-link">{{{ output.supportemail }}}</div>
                    {{/ output.supportemail }}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="footer-section p-3 border-bottom">
';
                $value = $context->findDot('output.page_doc_link');
                $buffer .= $this->sectionE3c74287c07480ba1dd4fc7e40fad08c($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->findDot('output.services_support_link');
                $buffer .= $this->section99a892a6723679801f5a14bbbc306305($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->findDot('output.supportemail');
                $buffer .= $this->section6c810693e5c3a7387fdc3e08f074a6c4($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9aef6ea52f9aeadf76f178a44870e87a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sitemaptitle, theme_ahnac';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sitemaptitle, theme_ahnac';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE9b5aaa53d0be29435cc61cf6c04096c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'homeurl, theme_ahnac';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'homeurl, theme_ahnac';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD9b7e8e788641fcdae14636ae4b0a997(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'home, theme_ahnac';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'home, theme_ahnac';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC6b953d5439a12f43a795510abb5527e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'coursesurl, theme_ahnac';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'coursesurl, theme_ahnac';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section09249bc280b51817f143ab0986f52e35(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'courses, theme_ahnac';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'courses, theme_ahnac';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1702e14d3f8c545d02b5e2c027dab763(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'tutorialsurl, theme_ahnac';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'tutorialsurl, theme_ahnac';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3a7c266e50fb07ee2ea0fcb7764e5923(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'tutorials, theme_ahnac';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'tutorials, theme_ahnac';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6ad769213f0264a3f15525ebd93f572b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'followus, theme_ahnac';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'followus, theme_ahnac';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section72be86b82e930d6f1a57b863b60098f3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'facebook, theme_ahnac';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'facebook, theme_ahnac';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section29644c283e78e162f7893617af62cee8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'instagram, theme_ahnac';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'instagram, theme_ahnac';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section97509ac7d1478acc7e703a0b151f7834(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'twitter, theme_ahnac';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'twitter, theme_ahnac';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEc02af9b98ad839dee7c60cd2174f103(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'youtube, theme_ahnac';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'youtube, theme_ahnac';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section12222920f5d041018cefc6bd57b101a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'linkedin, theme_ahnac';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'linkedin, theme_ahnac';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f04c6a170b2c9cdc36ca23a51b7cb0d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'otherlinks, theme_ahnac';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'otherlinks, theme_ahnac';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7931c89d881aedbc15fdcc9f4a1d2a12(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'podcasts, theme_ahnac';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'podcasts, theme_ahnac';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE4a39b9df7356eb0511e763aa12bd74c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'myahnac, theme_ahnac';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'myahnac, theme_ahnac';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD6b4e290c7700b8d9a5c4be737f1c1f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'bluekango, theme_ahnac';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'bluekango, theme_ahnac';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAa8f35454d5446cdca5be017597386a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'poweredbymoodle, core, theme_ahnac';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'poweredbymoodle, core, theme_ahnac';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA265066e134dc8f4d7c72faed22cc276(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'version, core, theme_ahnac';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'version, core, theme_ahnac';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE9e844303d96fe0e0d25e2157a7e3f5e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div>
                    {{#str}}version, core, theme_ahnac{{/str}} {{{ output.moodle_release }}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div>
';
                $buffer .= $indent . '                    ';
                $value = $context->find('str');
                $buffer .= $this->sectionA265066e134dc8f4d7c72faed22cc276($context, $indent, $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->findDot('output.moodle_release'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB60a5f65013c307b4cb66614d8cf1e1d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'theme_boost/footer-popover\'], function(FooterPopover) {
    FooterPopover.init();
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'theme_boost/footer-popover\'], function(FooterPopover) {
';
                $buffer .= $indent . '    FooterPopover.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
