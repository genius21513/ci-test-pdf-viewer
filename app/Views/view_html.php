<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .highlight {
            background-color: yellow;
            cursor: pointer;
        }

        #mark {
            background-image: url(/assets/highlight-icon.svg);
            background-repeat: no-repeat;
            background-size: cover;
            position: absolute;
            background-color: aqua;
            border-radius: 5px;
            display: none;

            top: 10px;
            left: 10px;
            width: 30px;
            height: 30px;
            cursor: pointer;
        }

        #mark.show {
            display: block;
        }
    </style>

</head>

<body>
    <div id="content">
        Using the PDF Viewer

        During the Reading and Writing sub-tests there will be PDFs to read. The PDF will open automatically on the left pane of the split screen.



        Refer to the image below to assist you in understanding the PDF functionality.

        PDF-bar-final
        Open the PDF Viewer within the Test

        The PDF should open automatically when the page opens.


        If the PDF does not automatically open on your device, click on the relevant source materials on the right pane of the split screen to open the PDF Viewer. For example, you can click the icon underneath which links to the Sample page on the left pane (samplePDF).


        Navigation through the PDF Viewer

        You can use your mouse to scroll down to view all texts in the PDF.


        Other Functions of the PDF Viewer



        Pan pan - Click and drag to pan around the document.


        Zoom In/Out zoom - Click to zoom in and out of the document. Other predefined options available in the drop-down list are: Automatic Zoom, Actual Size, Fit Page, and Full Width.


        Highlight highlight - To highlight text, click and drag the mouse cursor over the desired text. Click the 'Highlight' button that appears after releasing the mouse button. To remove the highlight, click on any area of the highlighted text.


        Please try these features now to familiarise before the test begins.

        Click the 'Next' button to continue.


        Sample
        Pdf

        <br />
        <br />
        <br />
    </div>

    <span id="mark"></span>

    <script>
        let clickCoords;
        let selecting = false;
        let seelcted = false;
        let text = '';
        let selection = null;
        let range = null;        
        let markSpan = document.getElementById('mark');

        // document.addEventListener('selectionchange', () => {
        // });
        
        document.getElementById('content').addEventListener('mouseup', (e) => {
            e.preventDefault();

            // console.log(window.getSelection().type);
            // console.log(selection);

            // This is button click event
            if (window.getSelection().type !== 'Range') {
                // markSpan.removeAttribute('class');
                markSpan.setAttribute('class', '');
                return false;
            }

            selection = window.getSelection();
            range = selection.getRangeAt(0);
            selected = true;

            // console.log(selection.toString());

            clickCoords = {
                x: e.pageX,
                y: e.pageY
            };

            // show mark icon
            markSpan.style.left = clickCoords.x + 'px';
            markSpan.style.top = clickCoords.y + 'px';
            markSpan.setAttribute('class', 'show');
            markSpan.addEventListener('click', clickMark);

            // if(text == '') {
            //     // window.getSelection().removeAllRanges();
            //     // const range = document.body.createTextRange();
            //     // range.moveToElementText(node);
            //     // range.select();
            //     // remove hightlight
            // } else {
            //     let selection = window.getSelection();
            //     let range = selection.getRangeAt(0);                    
            //     let newNode = document.createElement("span");                    
            //     newNode.setAttribute("class", "highlight");
            //     range.surroundContents(newNode);                     
            // }
        });

        // document.getElementsByClassName('highlight').addEventListener('mouseup', () => {
        //     alert();
        // })

        function clickMark(e) {
            e.preventDefault();

            if (!selected) return;
            // let selection = window.getSelection();
            // let range = selection.getRangeAt(0);

            let parent = selection.anchorNode.parentElement;
            let grandParent = parent.parentElement;

            let parent_f = selection.focusNode.parentElement;
            let grandParent_f = parent_f.parentElement;

            selected = false;
0.++
            let newNode = document.createElement("span");
            newNode.setAttribute("class", "highlight");
            newNode.textContent = range.toString();

            markSpan.setAttribute('class', '');
            
            // remote highlight
            newNode.addEventListener('click', (e) => {
                e.preventDefault();
                // if(selected) return;
                console.log(parent.textContent);
                parent.replaceWith(document.createTextNode(parent.textContent));
                grandParent.normalize();
            });            
            range.deleteContents();
            range.insertNode(newNode);
            // range.surroundContents(newNode);
        }
    </script>

</body>

</html>