function downloadFile(json, filename) {
   const data = json.join("\n");
   const blob = new Blob(["\uFEFF"+data], { type: 'text/csv; charset=utf-8' });
   const href = URL.createObjectURL(blob);
   const a = Object.assign(document.createElement('a'), {
      href,
      style: 'display:none',
      download: filename + '.csv'
   });

   document.body.appendChild(a);

   a.click();
   URL.revokeObjectURL(href);
   a.remove();
}