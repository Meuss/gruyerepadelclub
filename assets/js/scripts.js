document.addEventListener('DOMContentLoaded', function () {
    const menuButton = document.querySelector('#hamburger');
    const menu = document.querySelector('.offcanvas');

    menuButton.addEventListener('click', function () {
        menu.classList.toggle('open');
        menuButton.classList.toggle('open');
    });

    // Close the menu when clicking escape
    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            menu.classList.remove('open');
            menuButton.classList.remove('open');
        }
    });
});

// Tournoi interne google sheet
document.addEventListener('DOMContentLoaded', function () {
    const container = document.getElementById('excel-matchs');
    if (!container) return;

    const SHEET_ID = '1NP-ifytPZPkKyXaGuOSrX86wW6Yfoq-YMCeyG9duNNc';
    const GID = '0';
    const CSV_URL = `https://docs.google.com/spreadsheets/d/${SHEET_ID}/export?format=csv&gid=${GID}`;

    fetch(CSV_URL)
        .then((response) => response.text())
        .then((csvText) => {
            const rows = csvText
                .trim()
                .split('\n')
                .map((row) => row.split(','));
            const headers = rows[0].slice(0, 4);
            const data = rows
                .slice(1)
                .map((row) => {
                    return {
                        displayData: row.slice(0, 4),
                        // Get 5th column for winner styling
                        winnerStatus: row[4],
                    };
                })
                .reverse();

            // Create wrapper div with overflow-x:auto
            const tableWrapper = document.createElement('div');
            tableWrapper.style.overflowX = 'auto';
            tableWrapper.style.width = '100%';

            const table = document.createElement('table');
            table.style.borderCollapse = 'collapse';
            table.style.marginTop = '1em';

            const thead = document.createElement('thead');
            const tbody = document.createElement('tbody');

            const headerRow = document.createElement('tr');
            headers.forEach((header, colIndex) => {
                const th = document.createElement('th');
                th.textContent = header;
                th.style.border = '1px solid #ccc';
                th.classList.add('bg-primary', 'text-white', 'font-bold', 'text-left', 'px-2', 'py-2');
                headerRow.appendChild(th);
            });
            thead.appendChild(headerRow);
            table.appendChild(thead);
            table.appendChild(tbody);
            tableWrapper.appendChild(table);
            container.appendChild(tableWrapper);

            function renderRows() {
                tbody.innerHTML = '';
                data.forEach((item) => {
                    const tr = document.createElement('tr');
                    // Only display the first 4 columns
                    item.displayData.forEach((col) => {
                        const td = document.createElement('td');
                        td.textContent = col;
                        td.style.border = '1px solid #ccc';
                        td.style.padding = '4px 8px';
                        tr.appendChild(td);
                    });
                    // add min-width 200px to the second and fourth columns
                    const td1 = tr.children[1];
                    if (td1) {
                        td1.style.minWidth = '200px';
                    }
                    const td3 = tr.children[3];
                    if (td3) {
                        td3.style.minWidth = '200px';
                    }
                    const status = Number(item.winnerStatus);
                    if (status === 1) {
                        const td = tr.children[1];
                        if (td) {
                            td.style.fontWeight = 'bold';
                        }
                    } else if (status === 0) {
                        const td = tr.children[3];
                        if (td) {
                            td.style.fontWeight = 'bold';
                        }
                    }
                    tbody.appendChild(tr);
                });
            }

            renderRows();
        })
        .catch((error) => {
            console.error('Error fetching Google Sheet:', error);
            container.textContent = 'Failed to load data.';
        });
});

document.addEventListener('DOMContentLoaded', function () {
    const container = document.getElementById('excel-classement');
    if (!container) return;

    const SHEET_ID = '1NP-ifytPZPkKyXaGuOSrX86wW6Yfoq-YMCeyG9duNNc';
    const GID = '1650754621';
    const CSV_URL = `https://docs.google.com/spreadsheets/d/${SHEET_ID}/export?format=csv&gid=${GID}`;

    fetch(CSV_URL)
        .then((response) => response.text())
        .then((csvText) => {
            const rows = csvText
                .trim()
                .split('\n')
                .map((row) => row.split(','));
            const headers = rows[0].slice(0, 3);
            const data = rows.slice(1).map((row) => {
                return {
                    displayData: row.slice(0, 3),
                };
            });

            // Create wrapper div with overflow-x:auto
            const tableWrapper = document.createElement('div');
            tableWrapper.style.overflowX = 'auto';
            tableWrapper.style.width = '100%';

            const table = document.createElement('table');
            table.style.borderCollapse = 'collapse';
            table.style.marginTop = '1em';

            const thead = document.createElement('thead');
            const tbody = document.createElement('tbody');

            const headerRow = document.createElement('tr');
            headers.forEach((header, colIndex) => {
                const th = document.createElement('th');
                th.textContent = header;
                th.style.border = '1px solid #ccc';
                th.classList.add('bg-primary', 'text-white', 'font-bold', 'text-left', 'px-2', 'py-2');
                headerRow.appendChild(th);
            });
            thead.appendChild(headerRow);
            table.appendChild(thead);
            table.appendChild(tbody);
            tableWrapper.appendChild(table);
            container.appendChild(tableWrapper);

            function renderRows() {
                tbody.innerHTML = '';
                data.forEach((item) => {
                    const tr = document.createElement('tr');

                    item.displayData.forEach((col) => {
                        const td = document.createElement('td');
                        td.textContent = col;
                        td.style.border = '1px solid #ccc';
                        td.style.padding = '4px 8px';
                        tr.appendChild(td);
                    });
                    tbody.appendChild(tr);
                });
            }

            renderRows();
        })
        .catch((error) => {
            console.error('Error fetching Google Sheet:', error);
            container.textContent = 'Failed to load data.';
        });
});
