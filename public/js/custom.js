
function showAndHideBlock(current)
{
    let items = document.getElementsByClassName('display-once');
    for (const item of items)
    {
        if (item.classList.contains('d-none'))
        {
            item.classList.remove('d-none');

            item.classList.add('d-block');
            item.classList.add('animate__animated');
            item.classList.add('animate__fadeIn');
        }
        else if (item.classList.contains('d-block'))
        {
            item.classList.remove('d-block');
            item.classList.remove('animate__animated');
            item.classList.remove('animate__fadeIn');

            item.classList.add('d-none');
        }
    }

    for (const child of current.children)
    {
        if (child.classList.contains('d-none'))
        {
            child.classList.remove('d-none');
            child.classList.add('d-block');
        }
        else if (child.classList.contains('d-block'))
        {
            child.classList.remove('d-block');
            child.classList.add('d-none');
        }
    }
}

function displayInfos(current)
{
    let text = current.options[current.selectedIndex].text;
    text = text.split(" - ");
    document.getElementById('machineModel').innerText = text[1].toUpperCase();
    document.getElementById('serialNumber').innerText = text[0].toUpperCase();
}
