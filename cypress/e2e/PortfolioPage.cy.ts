describe("PortfolioPage", () => {
	it("should load the portfolio page", () => {
	  cy.visit("/portfolio");
	  cy.contains("Portfolio").should("be.visible");
	});
  });
  