<style>
        .innerButton>div{
            flex:1;
            text-align:center;
        }
        .cur{
            cursor: pointer;
        }
        .innerButton{
            border-bottom:2px solid rgba(0,0,0,0.3);
        }
        input[type="text"].inp {
        box-sizing: border-box;
        width: 100%;
        height: 43px;
        margin: 0 0 1em;
        padding: 1em;
        border: 1px solid #ccc;
        background: #fff;
        resize: none;
        outline: none;
    }

    input[type="text"][required]:focus {
        border-color: #034a59;;
    }
    input[type="text"][required]:focus + label[placeholder]:before {
        color: #034a59;;
    }
    input[type="text"][required]:focus + label[placeholder]:before,
    input[type="text"][required]:valid + label[placeholder]:before {
        transition-duration: .2s;
        transform: translate(0, -1.5em) scale(0.9, 0.9);
    }

    input[type="text"][required]:invalid + label[placeholder][alt]:before {
        content: attr(alt);
    }

    input[type="text"][required] + label[placeholder] {
        display: block;
        pointer-events: none;
        line-height: 1em;
        margin-top: calc(-3em - 2px);
        margin-bottom: calc((3em - 1em) + 2px);
    }

    input[type="text"][required] + label[placeholder]:before {
        content: attr(placeholder);
        display: inline-block;
        margin: 0 calc(1em + 2px);
        padding: 0 2px;
        color: #898989;
        white-space: nowrap;
        transition: 0.3s ease-in-out;
        background-image: linear-gradient(to bottom, #fff, #fff);
        background-size: 100% 5px;
        background-repeat: no-repeat;
        background-position: center;
    }

</style>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Recommend your recruiter</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                
                            </div>
                            <!-- body -->
                            <div class="modal-body">
                                <div class="bodyContainer">
                                    <div class="sm" style="font-size:12px;">Recommend your Aya recruiter to a friend using the personalized link below!</div>
                                    <!-- flex -->
                                    <div class="d-flex innerButton mt-3">
                                        <div class="p-2 cur" onClick="setCheck()" style="border-bottom:2px solid #f15e22;"id="co">Copy</div>
                                        <div class="p-2 cur" onClick="setCheck1()" id="tex">Text</div>
                                        <div class="p-2 cur" onClick="setCheck2()" id="em">Email</div>
                                    </div>
                                    <!-- flex end -->
                                    <div class="input-group input-group-lg mt-3 " id="none1">
                                    <input required='' type='text' class="inp">
                                    <label alt='Copy' placeholder='Copy'></label>
                                    </div>
                                    <div class="input-group input-group-lg mt-3 d-none" id="none2">
                                    <input required='' type='text'  class="inp">
                                    <label alt='Text' placeholder='Text'></label>
                                    </div>
                                    <div class="input-group input-group-lg mt-3 d-none" id="none3">
                                    <input required='' type='text'  class="inp">
                                    <label alt='Email' placeholder='Email'></label>
                                    </div>
                                    
                                </div>
                                <!-- body cont end -->
                                </div>
                                <!-- body -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        <script>
                            let checkCond1 = false;
                            let checkCond2 = false;
                            let checkCond3 = false;
                            function setCheck(){
                                checkCond1 = true;
                                checkCond2 = false;
                                checkCond3 = false;
                                condition(checkCond1,checkCond2,checkCond3,'co','tex','em')
                            
                            }                            
                            function setCheck1(){
                                checkCond1 = false;
                                checkCond2 = true;
                                checkCond3 = false;
                                condition(checkCond1,checkCond2,checkCond3,'co','tex','em')
                            }
                            function setCheck2(){
                                checkCond1 = false;
                                checkCond2 = false;
                                checkCond3 = true;
                                condition(checkCond1,checkCond2,checkCond3,'co','tex','em')
                            }
                            function condition(check1,check2,check3,id1,id2,id3){
                                if(check1){
                                    document.getElementById(id1).style.borderBottom = "2px solid #f15e22";
                                    document.getElementById('none1').classList.remove('d-none')
                                }
                                else{
                                    document.getElementById(id1).style.borderBottom = null;    
                                    document.getElementById('none1').classList.add('d-none')
                                }

                                if(check2){
                                    document.getElementById(id2).style.borderBottom = "2px solid #f15e22";
                                    document.getElementById('none2').classList.remove('d-none')
                                }
                                else{
                                    document.getElementById(id2).style.borderBottom = null;    
                                    document.getElementById('none2').classList.add('d-none')
                                }

                                if(check3){
                                    document.getElementById(id3).style.borderBottom = "2px solid #f15e22";
                                    document.getElementById('none3').classList.remove('d-none')
                                }
                                else{
                                    document.getElementById(id3).style.borderBottom = null;
                                    document.getElementById('none3').classList.add('d-none')
                                }
                            }
                        </script>