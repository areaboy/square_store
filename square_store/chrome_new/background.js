chrome.webNavigation.onCompleted.addListener(



  async () => {
   // await chrome.action.openPopup();

await chrome.windows.create({
    url: chrome.runtime.getURL('index.html'),
    width: 500,
    height: 600,
    type: 'popup'
  });

  },
  { url: [
    { urlMatches: 'https://www.youtube.com/*' },
{ urlMatches: 'https://www.tiktok.com/*' },
  ] },
);
